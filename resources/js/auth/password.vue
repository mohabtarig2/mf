<template>




<div class="">



<div class="card card-body ">
    <div class="alert alert-danger alert-dismissible fade show" role="alert" :class="match">
  <strong>new  password and  </strong> confirm Password not match
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    <h1 class="text-center">{{$t('Change_Your_Password')}}</h1>
    <form >
        <div class="form-group">
            <label for="email">{{$t('Current_Password')}}</label>
            <input type="password"
             name="email"
        
              class="form-control"
              v-model="Current_Password"
             :class="[{'is-invalid': errorFor('Current_Password')}]"
          />
          <v-errors :errors="errorFor('Current_Password')"></v-errors>
        </div>
        <div class="form-group">
            <label for="password">{{$t('New_password')}}</label>
            <input type="password"
             name="password"
          
              class="form-control"
              v-model="New_password"
             :class="[{'is-invalid': errorFor('New_password')}]"
          />
          <v-errors :errors="errorFor('New_password')"></v-errors>
        </div>

        <div class="form-group">
            <label for="password">{{$t('confirm_New_password')}}</label>
            <input type="password"
             name="password"

              class="form-control"
              v-model="confirm_password"
             :class="[{'is-invalid': errorFor('confirm_password')}]"
          />
          <v-errors :errors="errorFor('identify')"></v-errors>
        </div>
        <button type="submit" class="btn btn-bus btn-lg btn-block"
         :disabled="loading" @click.prevent="save">{{$t('save')}}</button>
 </form>
</div>
</div>
</template>

<script>
import validationErrors from "../shared/mixins/validationErrors";
import { logIn } from "./../shared/utils/auth";


export default {
    mixins:[validationErrors],

data() {

    return {
      Current_Password: null,
      confirm_password:null,
      New_password:null,
      loading: false,
      match:"d-none"

    };

  },
   methods: {
    async save() {
      this.loading = true;
      this.errors = null;

try {
const user = (await axios.get('/user')).data;

                axios.post("api/user/ChangePassword", {
          password: this.Current_Password,
          cpassword: this.confirm_password,
          npassword: this.New_password,
          userid :   user.id
        });


      this.loading = false;

}catch (error) {
        this.errors = error.response && error.response.data.errors;
      }


  }
}
}
</script>


