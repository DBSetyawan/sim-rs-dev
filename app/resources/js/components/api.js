/* globals $ */
import { post } from '../lib/http';

function apiUrl(method, ...params) {
  return ['/api', method, ...params].join('/');
}

function postFormData(url, formData) {
  return $.ajax({
    url,
    type: 'POST',
    data: formData,
    processData: false,
    contentType: false,
  });
}

function postForm(url, params) {
  return $.ajax({
    url,
    type: 'POST',
    data: params,
  });
}

function postJSON(url, obj) {
  return $.ajax({
    url,
    type: 'POST',
    data: JSON.stringify(obj),
    dataType: 'json',
    contentType: 'application/json; charset=UTF-8',
  });
}

function get(url, params) {
  return $.ajax({
    url,
    type: 'GET',
    data: params,
  });
}

export default class API {
  static createFile(file, inventoryId) {
    const url = apiUrl('artwork');
    const formData = new FormData();
    formData.append('file', file);
    formData.append('inventory_id', inventoryId);
    return postFormData(url, formData);
  }

  static createSnapshot(snapshot) {
    return new Promise((res, reject) => {
      if (snapshot) {
        const url = apiUrl('artwork/snapshots');
        const formData = new FormData();
        formData.append('snapshot', snapshot);
        postFormData(url, formData)
          .then(res)
          .fail(res);
      } else {
        reject('no snapshot provided to API.createSnapshot');
      }
    });
  }

  static createSnapshotEx(snapshot, inventory_id) {
    return new Promise((res, reject) => {
      if (snapshot) {
        const url = apiUrl('artwork/snapshots_ex');
        const formData = new FormData();
        formData.append('snapshot', snapshot);
        formData.append('inventory_id', inventory_id);
        postFormData(url, formData)
          .then(res)
          .fail(reject);
      } else {
        reject('no snapshot provided to API.createSnapshotEx');
      }
    });
  }

  static createLayout(layout) {
    const url = apiUrl('artwork/layouts');
    return postForm(url, { layout });
  }

  static getPrices(boxType, length, width, depth, material, inkCoverage, quantities, design) {
    const url = apiUrl('price');
    const params = {
      box_type: boxType,
      length,
      width,
      depth,
      material,
      ink_coverage: inkCoverage,
      quantities,
      design,
    };
    return postJSON(url, params);
  }

  static getBraintreeToken() {
    const url = apiUrl('braintree/token');
    return get(url);
  }

  static cmyk2rgb(c, m, y, k) {
    const url = apiUrl('convert-color');
    const params = { c, m, y, k };
    return get(url, params);
  }

  static rgb2cmyk(r, g, b) {
    const url = apiUrl('convert-color');
    const params = { r, g, b };
    return get(url, params);
  }

  static rgbColor(cmykColor) {
    const deferred = $.Deferred();
    this.requestCache = this.requestCache || {};
    if (this.requestCache[cmykColor]) {
      return this.requestCache[cmykColor];
    } else if (!cmykColor) {
      deferred.resolve('#fff');
    } else if (/^device-cmyk/.test(cmykColor)) {
      this.requestCache[cmykColor] = deferred;
      const [c, m, y, k] = /device-cmyk\(([^,]+),\s*([^,]+),\s*([^,]+),\s*([^,\)]+)/
        .exec(cmykColor)
        .slice(1)
        .map(parseFloat);
      API.cmyk2rgb(c, m, y, k).done(([r, g, b]) => {
        const rgbColor = `rgb(${Math.round(255 * r)}, ${Math.round(255 * g)}, ${Math.round(
          255 * b,
        )})`;
        deferred.resolve(rgbColor);
      });
    } else {
      deferred.resolve(cmykColor);
    }
    return deferred.promise();
  }

  static saveBox(inventory, dielineFaces) {
    const url = '/box';
    const params = {
      inventory: JSON.stringify(inventory),
      faces: JSON.stringify(dielineFaces),
    };
    return postForm(url, params);
  }

  static getVendorReportData(printingMethods, convertingMethods, vendorCode) {
    const arrToObject = (acc, method) => ({ ...acc, [method]: true });
    const printingMethodsMap = printingMethods.reduce(arrToObject, {});
    const convertingMethodsMap = convertingMethods.reduce(arrToObject, {});

    let url;
    if (vendorCode) {
      url = `/api/tools/vendor_report/${vendorCode}/capacity`;
    } else {
      url = '/api/tools/vendor_report/capacity';
    }

    return postForm(url, { converting: convertingMethodsMap, printing: printingMethodsMap });
  }
  static submitRestock(data) {
    const params = Object.entries({
      id: data.orderId,
      quantity: data.quantity,
      product_id: data.boxId,
      item_printing_method: data.itemPrintingMethod,
      source: 'web_restock_order',
    })
      .map((e) => `${e[0]}=${e[1]}`)
      .join('&');
    window.location.href = `/checkout/${data.orderId}/edit?${params}`;
  }
  static submitCustomQuote(
    customerDetails,
    packageDetails,
    shippingDetails,
    isBlank,
    inventoryId,
    snapshotURL,
    files,
  ) {
    const { source } = customerDetails;
    const { desiredDeliveryDate, note } = shippingDetails;

    const obj = new FormData();
    Object.keys(customerDetails).forEach((key) => {
      obj.append(`customer_info[${key}]`, customerDetails[key]);
    });

    Object.keys(packageDetails).forEach((key) => {
      obj.append(`deal[${key}]`, packageDetails[key]);
    });
    obj.append(`deal[note]`, note);
    obj.append(`deal[desired_delivery_date]`, desiredDeliveryDate);
    obj.append(`deal[snapshot_url]`, snapshotURL);

    files.forEach((file) => {
      obj.append('files[]', file);
    });

    obj.append('source', source);
    obj.append('inventory_id', inventoryId);
    obj.append('is_blank', isBlank);

    // Request Custom Quote
    return new Promise((res, rej) => {
      post('/api/v1/product/design/custom_quote', obj)
        .then((result) => {
          res(result.data.orderId);
        })
        .catch((error) => {
          switch (error.response.status) {
            case 400:
              rej('bad params');
              break;
            default:
              rej('unknown error');
              break;
          }
        });
    });
  }
}
