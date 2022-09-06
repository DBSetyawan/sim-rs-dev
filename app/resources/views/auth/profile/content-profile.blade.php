@extends('layouts.cmpny-assets')

@section('content')

{{-- <section class="masthead">
    <picture><img alt="Packlane box art" src="https://assets.packlane.com/images/colorful-boxes.svg"></picture>
</section> --}}
<section class="section section-no-background m-none">
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="intro-y box px-5 pt-5 mt-5">
                        <div
                            class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                            <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                                <div
                                    class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                    src="{{ asset('KOP/logoKOPf.jpg') }}"></div>
                                <div class="ml-5">
                                    <div
                                        class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">
                                        {{ Auth::user()->name }}</div>
                                        
                                        <li id="change-password-tab" class="nav-item" role="presentation"><a
                                            href="{{ route('forget.password.get') }}" class="nav-link py-4 flex items-center"
                                            data-tw-target="#change-password" aria-controls="change-password"
                                            aria-selected="false" role="tab"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-lock w-4 h-4 mr-2 w-4 h-4 mr-2">
                                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                            </svg> Change Password </a></li>
                                    <div class="text-slate-500">{{ Auth::user()->accessable }}</div>
                                </div>
                            </div>
                            <div
                                class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                                            <div class="font-medium text-center lg:text-left lg:mt-3"> Contact Details
                                            </div>
                                            <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                                                <div class="truncate sm:whitespace-normal flex items-center"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-mail w-4 h-4 mr-2 w-4 h-4 mr-2">
                                                        <path
                                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                        </path>
                                                        <polyline points="22,6 12,13 2,6"></polyline>
                                                    </svg> {{ Auth::user()->email }}</div>
                                                <div class="truncate sm:whitespace-normal flex items-center mt-3"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-instagram w-4 h-4 mr-2 w-4 h-4 mr-2">
                                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z">
                                                        </path>
                                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                                    </svg> Instagram {{ Auth::user()->name }}</div>
                                                <div class="truncate sm:whitespace-normal flex items-center mt-3"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-twitter w-4 h-4 mr-2 w-4 h-4 mr-2">
                                                        <path
                                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                                        </path>
                                                    </svg> Twitter {{ Auth::user()->name }}</div>
                                            </div>
                                        </div>
                                        @inject('Assetsuser', 'App\Models\Assetsuser')
                                        @php
                                        $rt = $Assetsuser->whereIn('order_to', [Auth::user()->id])->groupBy('component')->get();

                                        foreach ($rt as $key => $value) {
                                            # code...
                                            $dtrows[] = $value;
                                        }
                                        @endphp
                                        <div
                                            class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-0 border-slate-200/60 dark:border-darkmode-400 pt-5 lg:pt-0">
                                            <div class="text-center rounded-md w-20 py-3">
                                                {{-- <div class="font-medium text-primary text-xl">201</div>
                                                <div class="text-slate-500">Orders</div> --}}
                                            </div>
                                            <div class="text-center rounded-md w-30 py-3">
                                                @isset($dtrows)
                                                            <div class="font-medium text-primary text-xl">{{ count($dtrows) }} </div>
                                                        <div class="text-slate-500">Total Orders</div>
                                                        @else 
                                                    <div class="text-slate-500">Empty</div>
                                                @endisset
                                            </div>
                                            <div class="text-center rounded-md w-20 py-3">
                                                {{-- <div class="font-medium text-primary text-xl">492</div>
                                                <div class="text-slate-500">Reviews</div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <ul class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center"
                                        role="tablist">
                                        <li id="profile-tab" class="nav-item" role="presentation"><a href="javascript:;"
                                                class="nav-link py-4 flex items-center active" data-tw-target="#profile"
                                                aria-controls="profile" aria-selected="true" role="tab"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-user w-4 h-4 mr-2 w-4 h-4 mr-2">
                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg> Profile </a></li>
                                        <li id="account-tab" class="nav-item" role="presentation"><a href="javascript:;"
                                                class="nav-link py-4 flex items-center" data-tw-target="#account"
                                                aria-controls="account" aria-selected="false" role="tab"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-shield w-4 h-4 mr-2 w-4 h-4 mr-2">
                                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                                </svg> Account </a></li>
                                        <li id="change-password-tab" class="nav-item" role="presentation"><a
                                                href="javascript:;" class="nav-link py-4 flex items-center"
                                                data-tw-target="#change-password" aria-controls="change-password"
                                                aria-selected="false" role="tab"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-lock w-4 h-4 mr-2 w-4 h-4 mr-2">
                                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                                </svg> Change Password </a></li>
                                        <li id="settings-tab" class="nav-item" role="presentation"><a
                                                href="javascript:;" class="nav-link py-4 flex items-center"
                                                data-tw-target="#settings" aria-controls="settings"
                                                aria-selected="false" role="tab"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-settings w-4 h-4 mr-2 w-4 h-4 mr-2">
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                    <path
                                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                    </path>
                                                </svg> Settings </a></li>
                                    </ul> --}}
                                    {{-- <div id="searchbox"></div>
                                <div id="hits"></div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
</section>

@endsection
