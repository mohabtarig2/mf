<template>
<div class="container">
<construction-offer-detials  v-if="IsUser==6 || IsUser==4 || IsUser==3 || IsUser==5"></construction-offer-detials>
    <div v-if="IsUser==1">
    <a @click="$router.go(-1)" style="cursor:pointer" class="text-dark"><i class="fa fa-arrow-left  mb-3 fa-1x"></i></a>
     <div id="editPostModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
<img :src="src">
            <a :href="src" download class="text-center font-weight-bold text-dark"><i class="fa fa-arrow-down"></i> {{$t('download')}}</a>

        </div>
      </div>
    </div>
                  <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <div class="text-center"><i class='bx bxs-check-circle text-success'></i></div>
        <div class="text-center font-weight-bold">{{$t('The_has_been_deleted_successfully')}}</div>

      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="successBox" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">

   <div class="alert alert-info alert-dismissible fade show" role="alert">
تم تحديث البيانات بنجاح
  <button type="button" class="close text-light" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

  </div>
</div>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" >
  <div class="carousel-inner">
<span v-for="ads , index in adss" :key="index" v-bind="ads">



    <div class="row" :dir="$t('directions')" :class="$t('text_align')">

<div class="offset-md-2">

      </div>

      <div class="col-md-8 col-sm-12">
                            <div class="c-form-inner container">


                                <form @submit.prevent="submit(ads.ads,ads.Consultant_fee)" enctype="multipart/form-data" >
                                



    <div class="form-group">
    <label for="exampleFormControlInput1"  >{{$t('title')}}</label>

    <input type="text"  name="title" v-model="ads.title" class="form-control" id="exampleFormControlInput1" placeholder="" 
    >
             <!-- <div class="invalid-feedback" v-for="(error, index) in this.errorFor('title')" :key="'title' + index" >{{ error }}</div> -->

  </div>

    <div class="form-group">
    <label for="exampleFormControlTextarea1">{{$t('Desription')}}</label>
    <textarea class="form-control" v-model="ads.Description" name="Description"   id="exampleFormControlTextarea1" rows="4"
     ></textarea>
     <!-- :class="[{'is-invalid':this.errorFor('desc')}]" -->
       <!-- <div class="invalid-feedback" v-for="(error, index) in this.errorFor('desc')" :key="'desc' + index" >{{ error }}</div> -->


  </div>

    <div class="form-group row">
 <div class="col-md-4 col-sm-12">
    <label for="exampleFormControlSelect">{{$t('bed_rooms')}}</label>
    <select  class="form-control" id="exampleFormControlSelect  " name="room" v-model="ads.rooms"
    >

     <option value="1"  :selected="ads.rooms==1">1 {{$t('rooms')}}</option>
      <option value="2" :selected="ads.rooms==2">2 {{$t('rooms')}}</option>
      <option value="3" :selected="ads.rooms==3">3 {{$t('rooms')}}</option>
      <option value="4" :selected="ads.rooms==4">4 {{$t('rooms')}}</option>
      <option value="5" :selected="ads.rooms==5">5 {{$t('rooms')}}</option>
      <option value="6" :selected="ads.rooms==6">6 {{$t('rooms')}}</option>
      <option value="7" :selected="ads.rooms==7">7 {{$t('rooms')}}</option>
      <option value="8" :selected="ads.rooms==8">8 {{$t('rooms')}}</option>

    </select>

           <!-- <div class="invalid-feedback" v-for="(error, index) in this.errorFor('rooms')" :key="'rooms' + index" >{{ error }}</div> -->
      </div>
        <div class="col-md-4 col-sm-12">
    <label for="exampleFormControlSelect2">{{$t('Type_Of_Villa')}}</label>
    <select  class="form-control" id="exampleFormControlSelect2" name="TypeVilla" 
    v-model="ads.type_villa" >
    <!-- :class="[{'is-invalid':this.errorFor('villa')}]" -->
      <option value="1" :selected="ads.type_villa==1">{{$t('classic')}}</option>
      <option value="2" :selected="ads.type_villa==2">{{$t('modern')}}</option>


    </select>

           <!-- <div class="invalid-feedback" v-for="(error, index) in this.errorFor('villa')" :key="'villa' + index" >{{ error }}</div> -->
      </div>
            <div class="col-md-4 col-sm-12">
    <label for="exampleFormControlSelect3">{{$t('floors')}}</label>

    <select  class="form-control" id="exampleFormControlSelect3" name="floors" v-model="ads.floors"
     >
     <!-- :class="[{'is-invalid':this.errorFor('floors')}]" -->

     <option value="1" :selected="ads.floors==1">1 {{$t('floors')}}</option>
      <option value="2" :selected="ads.floors==2">2 {{$t('floors')}}</option>
      <option value="3" :selected="ads.floors==3">3 {{$t('floors')}}</option>
      <option value="4" :selected="ads.floors==4">4 {{$t('floors')}}</option>


    </select>

           <!-- <div class="invalid-feedback" v-for="(error, index) in this.errorFor('floors')" :key="'floors' + index" >{{ error }}</div> -->
      </div>
      </div>

          <div class="form-group row">


      <div class="col-md-4 col-sm-12">
    <label for="exampleFormControlSelect1"> {{$t('master_rooms')}}</label>
    <select  class="form-control" id="exampleFormControlSelect1" name="master_rooms"
     v-model="ads.room_master" >
     <!-- :class="[{'is-invalid':this.errorFor('room_master')}] -->

     <option value="1" :selected="ads.room_master==1">1 {{$t('master_rooms')}}</option>
      <option value="2" :selected="ads.room_master==2">2 {{$t('master_rooms')}}</option>
      <option value="3" :selected="ads.room_master==3">3 {{$t('master_rooms')}}</option>
      <option value="4" :selected="ads.room_master==4">4 {{$t('master_rooms')}}</option>
      <option value="5" :selected="ads.room_master==5">5 {{$t('master_rooms')}}</option>
      <option value="6" :selected="ads.room_master==6">6 {{$t('master_rooms')}}</option>
      <option value="7" :selected="ads.room_master==7">7 {{$t('master_rooms')}}</option>
      <option value="8" :selected="ads.room_master==8">8 {{$t('master_rooms')}}</option>

    </select>

           <!-- <div class="invalid-feedback" v-for="(error, index) in this.errorFor('room_master')" :key="'room_master' + index" >{{ error }}</div> -->
      </div>
      <div class="col-md-4 col-sm-12">
    <label for="exampleFormControlSelect1">{{$t('majlis')}}</label>
    <select  class="form-control" id="exampleFormControlSelect1" name="majlis" v-model="ads.majlis" 
    >
    <!-- :class="[{'is-invalid':this.errorFor('majlis')}] -->
          <option value="0"  :selected="ads.majlis==0">0 {{$t('majlis')}}</option>
     <option value="1" :selected="ads.majlis==1">1 {{$t('majlis')}}</option>
      <option value="2" :selected="ads.majlis==2">2 {{$t('majlis')}}</option>
      <option value="3" :selected="ads.majlis==3">3 {{$t('majlis')}}</option>
      <option value="4" :selected="ads.majlis==4">4 {{$t('majlis')}}</option>


    </select>

           <!-- <div class="invalid-feedback" v-for="(error, index) in this.errorFor('majlis')" :key="'majlis' + index" >{{ error }}</div> -->
      </div>


      <div class="col-md-4 col-sm-12">
    <label for="exampleFormControlSelect1">{{$t('living room')}}</label>
    <select  class="form-control" id="exampleFormControlSelect1" name="floors" v-model="ads.living_room" >
    <!-- :class="[{'is-invalid':this.errorFor('majlis')}]" -->
          <option value="0">0</option>
     <option value="1" :selected="ads.living_room==1">1 {{$t('living room')}}</option>
      <option value="2" :selected="ads.living_room==2">2 {{$t('living room')}}</option>
      <option value="3" :selected="ads.living_room==3">3 {{$t('living room')}}</option>
      <option value="4" :selected="ads.living_room==4">4 {{$t('living room')}}</option>


    </select>

           <!-- <div class="invalid-feedback" v-for="(error, index) in this.errorFor('majlis')" :key="'majlis' + index" >{{ error }}</div> -->
      </div>

  </div>

   <div class="form-group row">
 <div class="col-md-4 col-sm-12">
    <label for="exampleFormControlSelect1">{{$t('kitchen')}}</label>
    <select  class="form-control" id="exampleFormControlSelect1" name="kitchen" v-model="ads.kitchen" 
   >
    <!-- :class="[{'is-invalid':this.errorFor('kitchen')}] -->
      <option value="1" :selected="ads.kitchen==1">1 {{$t('kitchen')}}</option>
      <option value="2" :selected="ads.kitchen==2">2 {{$t('kitchen')}}</option>
      <option value="3" :selected="ads.kitchen==3">3 {{$t('kitchen')}}</option>
      <option value="4" :selected="ads.kitchen==4">4 {{$t('kitchen')}}</option>


    </select>

           <!-- <div class="invalid-feedback" v-for="(error, index) in this.errorFor('kitchen')" :key="'kitchen' + index" >{{ error }}</div> -->
      </div>

      <div class="col-md-4 col-sm-12">
    <label for="exampleFormControlSelect1">{{$t('dining')}}</label>
    <select  class="form-control" id="exampleFormControlSelect1" name="dining" v-model="ads.dining" >
    <!-- :class="[{'is-invalid':this.errorFor('dining')}] -->
       <option value="1" :selected="ads.dining==1">1 {{$t('dining')}}</option>
      <option value="2" :selected="ads.dining==2">2 {{$t('dining')}}</option>
      <option value="3" :selected="ads.dining==3">3 {{$t('dining')}}</option>
      <option value="4" :selected="ads.dining==4">4 {{$t('dining')}}</option>
    </select>

           <!-- <div class="invalid-feedback" v-for="(error, index) in this.errorFor('dining')" :key="'dining' + index" >{{ error }}</div> -->
      </div>


      <div class="col-md-4 col-sm-12">
    <label for="exampleFormControlSelect1">{{$t('bathroom')}}</label>
    <select  class="form-control" id="exampleFormControlSelect1" name="bathroom" v-model="ads.bathroom" 
    >
    <!-- :class="[{'is-invalid':this.errorFor('bathroom')}] -->
        <option value="1" :selected="ads.bathroom==1">1 {{$t('bathroom')}}</option>
      <option value="2" :selected="ads.bathroom==2">2 {{$t('bathroom')}}</option>
      <option value="3" :selected="ads.bathroom==3">3 {{$t('bathroom')}}</option>
      <option value="4" :selected="ads.bathroom==4">4 {{$t('bathroom')}}</option>

    </select>

           <!-- <div class="invalid-feedback" v-for="(error, index) in this.errorFor('bathroom')" :key="'bathroom' + index" >{{ error }}</div> -->
      </div>


  </div>

  <div class="form-group row">


      <div class="col-md-6 col-sm-12">
    <label for="exampleFormControlSelect1">{{$t('Service_room_placement')}}  </label>
    <select  class="form-control" id="exampleFormControlSelect1" name="Service_room_placement" v-model="ads.Service_room_placement"
     >
     <!-- :class="[{'is-invalid':this.errorFor('Service_room_placement')}] -->
      <option value="1" :selected="ads.Service_room_placement==1">{{$t('inside')}}</option>
      <option value="2" :selected="ads.Service_room_placement==2">{{$t('outside')}}</option>

    </select>

           <!-- <div class="invalid-feedback" v-for="(error, index) in this.errorFor('Service_room_placement')" :key="'Service_room_placement' + index" >{{ error }}</div> -->
      </div>
      <div class="col-md-6 col-sm-12">
<label for="exampleFormControlSelect1"> {{$t('total_area_build')}}  </label>
          <input class="form-control" name="sqft" v-model="ads.sqft" placeholder="2150 Sqft"  >
          <!-- v:class="[{'is-invalid':this.errorFor('sqft')}] -->
                <!-- <div class="invalid-feedback" v-for="(error, index) in this.errorFor('sqft')" :key="'sqft' + index" >{{ error }}</div> -->

      </div>



  </div>
 <div class="form-group row">

    <div class="col-md-6 col-sm-12">
    <label for="exampleFormControlSelect2">{{$t('Emirates')}}</label>
    <select  class="form-control" id="exampleFormControlSelect2" name="Emirates" v-model="ads.Emirates" >
    <!-- :class="[{'is-invalid':this.errorFor('Emirates')}]" -->
      <option value=7>{{$t('abu_dabhi')}}</option>
                <option value='1' :selected="ads.Emirates==1">{{$t('dubai')}}</option>
                <option value='5' :selected="ads.Emirates==5">{{$t('sharja')}}</option>
                <option value='6' :selected="ads.Emirates==6">{{$t('ajman')}}</option>
                <option value='4' :selected="ads.Emirates==4">{{$t('um_alqwin')}}</option>
                <option value='3' :selected="ads.Emirates==3">{{$t('ras_alkhima')}}</option>
                <option value='2' :selected="ads.Emirates==2">{{$t('fujairah')}}</option>


    </select>
     <!-- <div class="invalid-feedback" v-for="(error, index) in this.errorFor('Emirates')" :key="'Emirates' + index" >{{ error }}</div> -->
    </div>
     <div class="col-md-6 col-sm-12">
    <label for="exampleFormControlSelect2">{{$t('price')}}</label>
     <input class="form-control"   v-model="ads.price" name="price">
     <!-- :class="[{'is-invalid':this.errorFor('price')}] -->


     <!-- <div class="invalid-feedback" v-for="(error, index) in this.errorFor('price')" :key="'price' + index" >{{ error }}</div> -->
    </div>

  </div>

    <div class="form-group row">

      <div class="col-md-12 col-sm-12">
<label for="exampleFormControlSelect1">{{$t('Design_Price')}}   </label>
          <input class="form-control" name="design"  v-model="ads.design" 
           placeholder="">
           <!-- :class="[{'is-invalid':this.errorFor('design')}] -->
                <!-- <div class="invalid-feedback" v-for="(error, index) in this.errorFor('design')" :key="'design' + index" >{{ error }}</div> -->


      </div>

    

  </div>

  
    <div class="form-group row">

    

           <div class="col-md-12 col-sm-12">
<label for="exampleFormControlSelect1">{{$t('superVision_monthly')}} </label>
          <input class="form-control"  name="supervision" v-model="ads.supervision" placeholder=""  >
          <!-- :class="[{'is-invalid':this.errorFor('supervision')}]" -->

                <!-- <div class="invalid-feedback" v-for="(error, index) in this.errorFor('supervision ')" :key="'supervision ' + index" >{{ error }}</div> -->

      </div>

  </div>

     <div class="form-group row">

      <div class="col-md-6 col-sm-12">
<label for="exampleFormControlSelect1"> {{$t('Name_Super_eng')}}  </label>
          <input class="form-control" type="text" v-model="ads.name_eng" placeholder="" name="name_eng" >
          <!-- :class="[{'is-invalid':this.errorFor('tab')}]" -->
                <!-- <div class="invalid-feedback" v-for="(error, index) in this.errorFor('tab')" :key="'tab' + index" >{{ error }}</div> -->


      </div>

           <div class="col-md-6 col-sm-12">
<label for="exampleFormControlSelect1">{{$t('')}}</label>
          <input class="form-control"  v-model="ads.phone" placeholder="" dir="ltr" name="phone"
          >
          <!-- :class="[{'is-invalid':this.errorFor('supervision')}]" -->
                <!-- <div class="invalid-feedback" v-for="(error, index) in this.errorFor('supervision ')" :key="'supervision ' + index" >{{ error }}</div> -->

      </div>

      
    <div class="p-descrip-box container mt-3">


 <div class="flex-container" >
    <div v-for="image , i in ads.villa_image " :key="i" >

              <a href="#editPostModal"  data-toggle="modal" @click="pick(image.path)">
        <img :src="image.path" class=" w-100 diispaly"  style="cursor:pointer" id="#editPostModal">
              </a>

    </div>
    </div>
    </div>

    
 <div class="form-group">
   <h3 class="mt-3 mb-3 text-muted h5" :class="$t('text_align')"> {{$t('Type_of_Ads')}} </h3>
    <label class="checkbox d-bolck" :dir="$t('directions')" >

  <input type="radio" name="TypeAds" v-model="ads.ads" value="0" checked>
  <span class="check" style="border-radius:10px"></span>
  <span class="mr-4 ml-4"> {{$t('ads')}}</span>
</label>

 <label class="checkbox d-bolck" :dir="$t('directions')">

  <input type="radio" name="TypeAds" v-model="ads.ads" value="1">
  <span class="check" style="border-radius:10px"></span>
  <span class="mr-4 ml-4"> {{$t('offer')}}</span>
</label>
                                </div>

 <div class="includes">
<h3 class="mt-3 mb-3 text-muted h5" :class="$t('text_align')"> {{$t('price_include')}} </h3>
 <div class="form-group row ">
<div class="col-6">
<label class="checkbox d-bolck" :dir="$t('directions')">

<!-- {{ads.Consultant_fee==true?ads.Consultant_fee :"false"}} -->
  <input type="checkbox" v-model="ads.Consultant_fee" name="Consultant_fee" :checked="ads.Consultant_fee" >
  <span class="check" ></span>
  <span class="mr-4 ml-4">{{$t('Consultant_fee')}}  </span>
</label>
<label class="checkbox d-bolck" :dir="$t('directions')" >

  <input type="checkbox" v-model="ads.CostGov" name="CostGov">
  <span class="check" ></span>
  <span class="mr-4 ml-4"> {{$t('CostGov')}}</span>
</label>
<label class="checkbox d-bolck" :dir="$t('directions')"> 

  <input type="checkbox" v-model="ads.tabCost" name="tabCos">
  <span class="check" ></span>
  <span class="mr-4 ml-4">  {{$t('tabCost')}}</span>
</label>


<label class="checkbox d-bolck" :dir="$t('directions')">

  <input type="checkbox" v-model="ads.conditioning" name="conditioning">
  <span class="check"></span>
  <span class="mr-4 ml-4"> {{$t('conditioning')}}</span>
</label>

<label class="checkbox d-bolck" :dir="$t('directions')">

  <input type="checkbox" v-model="ads.the_fence" name="the_fence">
  <span class="check"></span>
  <span class="mr-4 ml-4"> {{$t('the_fence')}}</span>
</label>
<label class="checkbox d-bolck" :dir="$t('directions')">

  <input type="checkbox" v-model="ads.electric_pendants" name="electric_pendants">
  <span class="check"></span>
  <span class="mr-4 ml-4">  {{$t('electric_pendants')}}</span>
</label>



</div>
<div class="col-6">
<label class="checkbox d-bolck" :dir="$t('directions')">

  <input type="checkbox"  v-model="ads.Bedroom_wardrobes" name="Bedroom_wardrobes">
  <span class="check"></span>
  <span class="mr-4 ml-4">    {{$t('Bedroom_wardrobes')}}</span>
</label>
<label class="checkbox d-bolck" :dir="$t('directions')">

  <input type="checkbox" v-model="ads.the_elevator" name="the_elevator">
  <span class="check"></span>
  <span class="mr-4 ml-4"> {{$t('the_elevator')}}</span>
</label>



     <label class="checkbox d-bolck" :dir="$t('directions')">

  <input type="checkbox" v-model="ads.pelvis" name="pelvis">
  <span class="check"></span>
  <span class="mr-4 ml-4"> {{$t('pelvis')}}</span>
</label>

<label class="checkbox d-bolck" :dir="$t('directions')">

  <input type="checkbox" v-model="ads.interior_decoration" name="interior_decoration">
  <span class="check" ></span>
  <span class="mr-4 ml-4">  {{$t('interior_decoration')}}</span>
</label>

<label class="checkbox d-bolck" :dir="$t('directions')">

  <input type="checkbox" v-model="ads.Kitchen_Cabinets" name="Kitchen_Cabinets">
  <span class="check"></span>
  <span class="mr-4 ml-4">  {{$t('Kitchen_Cabinets')}}</span>
</label>
<label class="checkbox d-bolck" :dir="$t('directions')">

  <input type="checkbox" v-model="ads.garden_design" name="garden_design">
  <span class="check"></span>
  <span class="mr-4 ml-4">  {{$t('garden_design')}}</span>
</label>

<label class="checkbox d-bolck" :dir="$t('directions')">

  <input type="checkbox" v-model="ads.gypsum" name="gypsum">
  <span class="check"></span>
  <span class="mr-4 ml-4">  {{$t('gypsum')}}</span>
</label>
  </div>
 </div>
 </div>

  </div>
  
   <a @click.prevent="submit(ads.ads,ads.Consultant_fee,ads.CostGov,ads.tabCost,
   ads.conditioning,ads.the_fence,ads.electric_pendants,ads.Bedroom_wardrobes,ads.the_elevator,
ads.pelvis,ads.interior_decoration,ads.Kitchen_Cabinets,ads.garden_design,ads.gypsum
   )" class="theme-btn  mx-auto"  >
      {{$t('post')}}</a>


     


  </form>


      </div>
      </div>

    </div>

</span>
  </div>
</div>



  </div>
</div>

</template>


<script>
import constructionOfferDetials from './constructionOfferDetials.vue';
export default {
  components: { constructionOfferDetials },
data(){
    return{
     ads_Id :this.$route.params.id,
     adss:null,
     src:null,
    }
},
    created() {
     this.getAds()
    },
    methods: {
      getAds(){
   axios.get('/api/ads/details/'+this.$route.params.id).then(res=>{
            this.adss = res.data;
        })
      },
      submit(ads,fee,CostG,tabCo,condition,fence,pendants,
      wardrobes,elevator,pelviss,interior,Cabinets,garden,gypsums){
        let data = new FormData();

         let title = document.querySelector("input[name=title]").value;
         

 let description = document.querySelector("textarea[name=Description]").value;


 let room = document.querySelector("select[name=room]").value;


 let TypeVilla = document.querySelector("select[name=TypeVilla]").value;
 let floors = document.querySelector("select[name=floors]").value;
 let majlis = document.querySelector("select[name=majlis]").value;
 let master_rooms = document.querySelector("select[name=master_rooms]").value;


 let kitchen = document.querySelector("select[name=kitchen]").value;


 let dining = document.querySelector("select[name=dining]").value;
 let bathroom = document.querySelector("select[name=bathroom]").value;
 let Service_room_placement = document.querySelector("select[name=Service_room_placement]").value;



 let sqft = document.querySelector("input[name=sqft]").value;
 let Emirates = document.querySelector("select[name=Emirates]").value;
 let price = document.querySelector("input[name=price]").value;

 let supervision = document.querySelector("input[name=supervision]").value;

 let name_eng = document.querySelector("input[name=name_eng]").value;
 

 let phone = document.querySelector("input[name=phone]").value;
    


 let TypeAds = ads;
 let Consultant_fee = fee;
 let CostGov = CostG;
 let tabCos = tabCo;
 let conditioning = condition;
 let the_fence = fence;
 let electric_pendants = pendants;
 let Bedroom_wardrobes = wardrobes;
 let the_elevator =elevator;
 let pelvis =pelviss;
 let interior_decoration = interior;
 let Kitchen_Cabinets = Cabinets;
 let garden_design =garden;
 let gypsum =gypsums; 

console.log(Consultant_fee);


        data.append('title', title);

        data.append('adsid', this.ads_Id);
        
         

 data.append('description',description);
 data.append('pelvis',pelvis);
 data.append('interior_decoration',interior_decoration);

 data.append('room',room);

 data.append('TypeVilla',TypeVilla);
 data.append('floors',floors);

  data.append('majlis',majlis);
 data.append('master_rooms',master_rooms);



  data.append('kitchen',kitchen);
 data.append('dining',dining);





 data.append('bathroom',bathroom);


   data.append('Service_room_placement',Service_room_placement);

 data.append('sqft',sqft);
 data.append('Emirates',Emirates);
 data.append('price',price);
 data.append('supervision',supervision);
 data.append('name_eng',name_eng);
 data.append('phone',phone);
 data.append('TypeAds',TypeAds);
 data.append('Consultant_fee',Consultant_fee);
 data.append('CostGov',CostGov);


  data.append('tabCos',tabCos);
 data.append('conditioning',conditioning);
 data.append('the_fence',the_fence);
 data.append('electric_pendants',electric_pendants);
 data.append('Bedroom_wardrobes',Bedroom_wardrobes);
 data.append('the_elevator',the_elevator);
 data.append('Kitchen_Cabinets',Kitchen_Cabinets);
 data.append('garden_design',garden_design);
 data.append('gypsum',gypsum);






axios.post('api/ads/edit/ads',data).then(res=>{
  console.log('Success Update');
  $('#successBox').modal('show');
                $('.modal-backdrop').css('display','block');
  this.getAds();
})










   
      },
        pick(src){

            this.src=src;

        }
    },
      computed: {

     IsUser(){
            return this.$store.getters.IsUser
        },

  },

}

</script>

<style  scoped>
.flex-container {
  display: flex;
  flex-wrap: nowrap;

}

.flex-container > div {
  width: 100%;
  margin: 10px;
  text-align: center;
}
.diispaly{
    width: 200px;
}
</style>
