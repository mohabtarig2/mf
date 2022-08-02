<template>
        <div :dir="$t('direactions')" :class="$t('text_align')"> 







            <h2 class=" mt-3 text-dark  " v-if="IsUser==1"  >{{$t('The_latest_engineering_consultancy_offers')}} </h2>
            <h2 class=" mt-3 text-dark  " v-if="IsUser==6"  >{{$t('The_latest_contracting_tender_offer')}} </h2>
            <h2 class=" mt-3 text-dark  " v-if="IsUser==4"  >
            {{$t('The_latest_offers_for_air_conditioning_tenders')}}
            </h2>
            <h2 class=" mt-3 text-dark  " v-if="IsUser==3"  >{{$t('The_latest_offers_for_stone_tenders')}} </h2>
            <h2 class=" mt-3 text-dark  " v-if="IsUser==5"  >{{$t('The_latest_offers_for_interior_decoration_tenders')}} </h2>

                    <div class="p-descrip-box" v-if="IsUser==1" >
                        <div class="">

              <div v-for="(project,index) in Myoffers" :key="index" v-bind="project" dir="rtl" >
              <div class="p-descrip-box mt-3 container  ">

<div class="ml-3">
         <div class="font-weight-bold    ml-2 ">
             {{project.tender.title}}</div>

    <div class="mt-2 text-muted ml-2">
            <span class=" d-block">
          <small>
                 <!-- {{created_at | luxon({ input: "server" }) }} -->
                 {{project.added_at}}
                  </small>
            <small class="fa  fa-ticket text-muted" ></small>



            </span>
    </div>



            <div class="mt-3 " style="padding:0 20px">


        

              
              <div class="row mt-3" >


                        <div class="col-6 ">
                          
                  <div class="pr-single m-0">
                      <div class="pr-desc">
											<span>{{$t('bed_rooms')}}</span>
											<p class="pr-des-title m-0" >  {{project.tender.bedroom}}</p>

										</div>
										<div class="pr-icon"><i class="fa fa-bed"></i></div>

									</div>
                                     <div class="pr-single m-0 pr-2 pl-2">
                                         <div class="pr-desc">
											<span>{{$t('bathroom')}}</span>
											<p class="pr-des-title m-0" >  {{project.tender.bedroom}}</p>

										</div>
										<div class="pr-icon"><i class="fa fa-bath"></i></div>

									</div>
                </div>


<div class="col-6">

                <router-link class="  theme-btn" :to="{name:'project',params:{id:project.tender.id} }">{{$t('more')}}</router-link>

</div>


              </div>
                 </div>


        </div>



</div>
          </div>

                    </div>
                    </div>

                        <div class="p-descrip-box" v-if="IsUser==6" v-for="(myoffer,index) in Myoffers" :key="index">
                        <div class="card-body">

                      <p class=""> <router-link class="font-weight-bold ml-2 main-color " :to="'tenders/construction/'+myoffer.tender.id">{{myoffer.tender.title}}</router-link>
                         <span class="text-muted  float-left" dir="ltr">{{myoffer.added_at}}</span>
                      <p>


                      <p class="">{{myoffer.textOffer}}</p>








                        </div>

                    </div>



                        <div class="p-descrip-box" v-if="IsUser==4" v-for="(myoffer,index) in Myoffers" :key="index">
                        <div class="card-body">

                      <p class=""> <router-link class="font-weight-bold ml-2 main-color " :to="'tenders/hvac/'+myoffer.tender.id">{{myoffer.tender.title}}</router-link>
                         <span class="text-muted  float-left" dir="ltr">{{myoffer.added_at}}</span>
                      <p>


                      <p class="">{{myoffer.textOffer}}</p>








                        </div>

                    </div>

                         <div class="p-descrip-box" v-if="IsUser==3" v-for="(myoffer,index) in Myoffers" :key="index">
                        <div class="card-body">

                      <p class=""> <router-link class="font-weight-bold ml-2 main-color " :to="'tenders/hvac/'+myoffer.tender.id">{{myoffer.tender.title}}</router-link>
                         <span class="text-muted  float-left" dir="ltr">{{myoffer.added_at}}</span>
                      <p>


                      <p class="">{{myoffer.textOffer}}</p>








                        </div>

                    </div>

                    
                         <div class="p-descrip-box" v-if="IsUser==5" v-for="(myoffer,index) in Myoffers" :key="index">
                        <div class="card-body">

                      <p class=""> <router-link class="font-weight-bold ml-2 main-color " :to="'tenders/interior/'+myoffer.tender.id">{{myoffer.tender.title}}</router-link>
                         <span class="text-muted  float-left" dir="ltr">{{myoffer.added_at}}</span>
                      <p>


                      <p class="">{{myoffer.textOffer}}</p>








                        </div>

                    </div>


        </div>

</template>


<script>

import MiniOffer from '../dashboard/miniOffer.vue';
export default {
  components: {  MiniOffer },

  data(){
      return{
          count:'',
          Myoffers:'',




      }
  },
  computed:{
        IsUser(){
                return this.$store.getters.IsUser
    },
  },

     created() {

         const  isuser =  this.$store.getters.IsUser;

         if(isuser==1){

     axios.get(`api/CountAll/conulte`).then(response=>{
        this.count = response.data;
        this.Myoffers = response.data.latest;





});
 }
         if(isuser==6){

     axios.get(`api/CountAll/construction`).then(response=>{
        this.count = response.data;
        this.Myoffers = response.data;

});
 }

         if(isuser==4){

     axios.get(`api/CountAll/hvac`).then(response=>{
        this.count = response.data;
        this.Myoffers = response.data;

});
 }


         if(isuser==3){

     axios.get(`api/CountAll/stone`).then(response=>{
        this.count = response.data;
        this.Myoffers = response.data;

});
 }

          if(isuser==5){

     axios.get(`api/CountAll/Inerior`).then(response=>{
        this.count = response.data;
        this.Myoffers = response.data;

});
 }

}
}
</script>
<style scoped>


.badge-oranger{
    background: rgba(255, 87, 34,0.1);
    color: #ff5722;
}
.card{
    padding: 20px;
}
</style>
