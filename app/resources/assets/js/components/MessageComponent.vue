<template>
    <!-- <div class="message self">
        <strong class="user">{{ message.user.name }}</strong>
        <p class="body">{{ message.body }}</p>
    </div> -->

<div class="message-list">
    <div id="chat-messages" class="message-group">
      <div class="message">
        <div class="clearfix">
          <h4 class="message-title"></h4>
          <small class="text-muted float-right">{{ message.user.name }}</small>
        </div>
        <!-- <div v-if="message.user_id === user.id"> -->
          <p class="message-text">
            {{ message.body }}
          </p>
        <!-- </div> latest dev impormpetog intermediate interface message.. -->
        <!-- <div v-else>
          <p class="message-text" style="color:blue">
          {{ message.body }}
          </p>
        </div> -->
        <div class="clearfix">
          <small class="text-muted float-right"></small>
        </div>
      </div>
    </div>
  </div>
  
</template>

<script>                                                                                                                          
    export default {
        props: ['message'], 
        mounted() {
            console.log('MessageComponent mounted.');
        },
    }
</script>

<style>

.message-list {
  margin-bottom: 5px;
  padding-right: 9px;
  grid-template-columns: 120px 120px 120px;
  align-items: start;
  justify-content: space-between;
}
.message-group {
  height: 15vh !important;
}
.message {
  border: 1px solid lightblue;
  border-radius: 4px;
  padding: 10px;
  margin-bottom: 15px;
  grid-template-columns: 1fr 1fr 1fr;
  gap: 10px 2em;
}
.message-title {
  font-size: 1rem;
  display:inline;
}
.message-text {
  color: gray;
  margin-bottom: 0;
}
.user-typing {
  height: 1rem;
}

</style>