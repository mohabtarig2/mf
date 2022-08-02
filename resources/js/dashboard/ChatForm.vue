<template>
    <div class=" form-group mt-3">
                  <label for="msg theme-color"> {{$t('send_message')}}</label>
                  <textarea
                  style="background:#fff"
                    class="form-control"
                    id="msg"
                    rows="6"
                    v-model="newMessage"
                    

                     
                       @keyup.enter="sendMessage"
                       

                  ></textarea>
                  <!-- <div
                    class="invalid-feedback"
                    v-for="(error, index) in this.errorFor('notes')"
                    :key="'notes' + index"
                  >{{ error }}</div> -->
                          {{newMessage.length}} /100
<button class="btn btn-download" :disabled="newMessage.length==0" @click="sendMessage">
{{$t('send')}}  </button>

                </div>
                
</template>
<script>

export default {
  //Takes the "user" props from <chat-form> … :user="{{ Auth::user() }}"></chat-form> in the parent chat.blade.php.
  props: ["user",'offer_id','type'],

  
  data() {
    return {
      newMessage: "",
    };
  },
  methods: {
    sendMessage() {
      //Emit a "messagesent" event including the user who sent the message along with the message content
      this.$emit("messagesent", {
        user: this.user,
      //newMessage is bound to the earlier "btn-input" input field
        message: this.newMessage,
        offer_id: this.offer_id,
        type: this.type,
      });
      //Clear the input
      this.newMessage = "";
    },
  },
};
</script>
