
<template>

  <div class="container " :dir="$t('directions')" :class="$t('text_align')">
 



<div class="modal fade bd-example-modal-lg" tabindex="-1" id="falid"
 role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content alert alert-danger text-danger">
     {{$t('You_must_enter_all_fields')}}
    </div>
  </div>
</div>

 <h1 class=" text-muted text-center">   {{$t('consulting_tender')}}</h1>
 <div class="links-requests mb-3">


</div>
    <div class="row mt-4">
      <div class="col-md-8">
        <div class="contact-form">
          <div class="card-body">
            <form @submit.prevent="formSubmit" enctype="multipart/form-data" class="c-form-inner">

              <div class=" form-group " >

                <label for=" h6"><span class=" h6 font-weight-bold thm-color">
                    {{$t('title')}}
                    </span>
                    </label>
                <input


                  v-model="title"
                  class="form-control"
                  :class="[{'is-invalid': errorFor('title')
                   , 'is-valid':Checktitle=='true'
                   , 'is-invalid':Checktitle =='false',
                   }
                    ]"
                  :placeholder="$t('short_descripe')"
                />
                <div
                  class="invalid-feedback"
                  v-for="(error, index) in this.errorFor('title')"
                  :key="'title' + index"
                >{{ error }}</div>
                <div v-if="msg!=null" class="invalid-feedback" :class="msg" >
              {{$t('Less_than_4_letters')}} </div>
              </div>

<div class="row">
    <div class="col-md-6 col-sm-12">
              <div class="font-weight-bold h6 mt-3  thm-color">{{$t('Choose_the_type_of_villa')}}</div>

              <div class="form-group  ">
    <label class="checkbox d-bolck" :dir="$t('directions')" >

   <input type="radio" name="flexRadioDefault" value="classic" v-model="villa">
  <span class="check" style="border-radius:10px"></span>
  <span class="mr-4 ml-4 "> {{$t('classic')}}</span>
</label>

 <label class="checkbox d-bolck" :dir="$t('directions')">

  <input type="radio" name="flexRadioDefault " value="modern" v-model="villa">
  <span class="check" style="border-radius:10px"></span>
  <span class="mr-4 ml-4"> {{$t('modern')}}</span>
</label>
                                </div>

    </div>

    <div class="col-md-6 col-sm-12">

 <div class="font-weight-bold h6 mt-3  thm-color">{{$t('floors')}}</div>

              <div class="form-group ">
    <label class="checkbox d-bolck" :dir="$t('directions')" >

  <input type="radio" name="floors" value="0" v-model="floor">
  <span class="check" style="border-radius:10px"></span>
   <span class="mr-4 ml-4"> {{$t('ground_floor')}} </span>
</label>

 <label class="checkbox d-bolck" :dir="$t('directions')">

  <input type="radio" name="floors" value="1" v-model="floor">
  <span class="check" style="border-radius:10px"></span>
  <span class="mr-4 ml-4">{{$t('ground_floor')}} +  {{$t('First_floor')}} </span>
</label>

 <label class="checkbox d-bolck" :dir="$t('directions')">

  <input type="radio" name="floors" value="2" v-model="floor">
  <span class="check" style="border-radius:10px"></span>
  <span class="mr-4 ml-4">{{$t('ground_floor')}} + {{$t('First_floor')}}+  
   {{$t('Surface')}} </span>
</label>
                                </div>

                                
    </div>

    
</div>
<div class="row">
  
<div class="col-md-6 col-sm-12">
                <div class="font-weight-bold h6 mt-3  thm-color">  {{$t('Do_you_want_basement')}}</div>

 <div class="form-group">
    <label class="checkbox d-bolck" :dir="$t('directions')" >

  <input type="radio" name="serdap" v-model="crypt" value="0" checked>
  <span class="check" style="border-radius:10px"></span>
  <span class="mr-4 ml-4"> {{$t('yes')}}</span>
</label>

 <label class="checkbox d-bolck" :dir="$t('directions')">

  <input type="radio" name="serdap" v-model="crypt" value="1">
  <span class="check" style="border-radius:10px"></span>
  <span class="mr-4 ml-4"> {{$t('no')}} </span>
</label>
                                </div>

</div>
<div class="col-md-6 col-sm-12">
                <div class="font-weight-bold h6 mt-3  thm-color">     {{$t('villa_design_shape')}}</div>

 <div class="form-group shapeVilla" style="display: flex;">
   <h4  @click="VillaShape('H')" :class="{'checked':square=='H'}">
     H
     
   </h4>

   <h4 @click="VillaShape('L')" :class="{'checked':square=='L'}"> L</h4>
   <h4 @click="VillaShape('U')" :class="{'checked':square=='U'}"> U</h4>
   <h4 @click="VillaShape('F')" :class="{'checked':square=='F'}"> F</h4>
   <h4 @click="VillaShape('square')" :class="{'checked':square=='square'}">
   <p :class="{'checked':square=='4'}" class="square"  ></p>
   </h4>
   <br>
 <!-- <div>
    <small @click="VillaShape('other')" class="btn btn-download" :class="{'checked':square=='other'}"> نوع اخر</small>

<br>
    <input v-model="other" v-show="square=='other'" placeholder='اكتب شكل الفيلا'>
   

</div>  -->



  </div>

</div>
</div>


<div class="row">
  <div class="col-12">
<div class="single-property-details">
<label>{{$t('finshing')}}
        <div class="nice-select form-control" :class="[open_select_finshing
         ,{'is-valid':finshing_selected !=''}
         ]"
        
         tabindex="0" @click="open('finishing')">
            <span class="current">
               <span v-show="finshing_selected==1"> {{$t('commercial')}} </span>
                <span v-show="finshing_selected==2"> {{$t('normal')}}</span>
                <span v-show="finshing_selected==3"> {{$t('good')}}</span>
                <span v-show="finshing_selected==4"> {{$t('Excellent')}}</span>
                <span v-show="finshing_selected==5"> {{$t('deluxe')}}</span>
                <span v-show="finshing_selected==6"> {{$t('superdeluxe')}}</span>
           </span>

                <ul class="list">
              <li data-value="1" class="option " @click="finshing(1)">{{$t('commercial')}}</li>
                  <li data-value="2" class="option" @click="finshing(2)">{{$t('normal')}} </li>
                  <li data-value="3" class="option"  @click="finshing(3)">{{$t('good')}}</li>
                  <li data-value="3" class="option"  @click="finshing(4)">{{$t('Excellent')}}</li>
                  <li data-value="3" class="option"  @click="finshing(5)">{{$t('deluxe')}}</li>
                  <li data-value="3" class="option"  @click="finshing(6)">{{$t('superdeluxe')}}</li>
    
                            </ul>
                    </div>
                    </label>

</div>
</div>

</div>




              <!-- ---------End Type floors-------------------------------------!-->

              <div class="rooms mt-3">
                <div class="row " >
                  <div class="col-md-6 col-sm-12 " >
                    <div class="form-group">
                    <label for="customRange3">
                       <span class="h6 thm-color font-weight-bold"> {{$t('master_rooms')}}</span>
                        </label>
                    <input
                      type="number"
                      class="form-control"
                      v-model="mastar_room"
                      :class="[{
                        'is-invalid': errorFor('mastar_room'),
                         'is-valid':CheckMaster=='true'
                        ,'is-invalid':CheckMaster =='false',
                      }]"
                       placeholder="  5" min="0"

                    />

            <div v-if="CheckMaster!=''"   
            class="invalid-feedback" :class="msg"> 
           
            {{$t('Type_a_number_in_case_you_dont_want_to_write_a_zero')}}
             </div>

                    <div
                      class="invalid-feedback"
                      v-for="(error, index) in this.errorFor('mastar_room')"
                      :key="'mastar_room' + index"
                    >{{ error }}</div>
                  </div>
                  </div>

                  <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                    <label for="customRange3">
                         <span class="h6 thm-color font-weight-bold">
                      {{$t('bed_rooms')}} </span></label>
                    <input
                      type="number"
                      class="form-control"
                      v-model="bedroom"
                      :class="[{'is-invalid': errorFor('bedroom'),
                                'is-valid':CheckRoom=='true'
                                ,'is-invalid':CheckRoom =='false',
                      }]"
                       placeholder="  5" min="0"
                    />
                       <div v-if="CheckRoom!=''"   
            class="invalid-feedback" :class="msg"> 
           {{$t('Type_a_number_in_case_you_dont_want_to_write_a_zero')}}
             </div>
                    <div
                      class="invalid-feedback"
                      v-for="(error, index) in this.errorFor('bedroom')"
                      :key="'bedroom' + index"
                    >{{ error }}</div>
                  </div>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-4 col-sm-12">
                    <label for="customRange3"> <span class="h6 thm-color font-weight-bold"> 
                      {{$t('living_room')}}
                    </span></label>
                    <input
                      type="number"
                      class=" form-group form-control"
                      v-model="living_room"
                      :class="[{'is-invalid': errorFor('living_room'),
                               'is-valid':CheckLiving=='true'
                              ,'is-invalid':CheckLiving =='false',
                      },
                                
                      ]"
                       placeholder="  5" min="0"
                    />
                    <div v-if="CheckLiving!=''"   
            class="invalid-feedback" :class="msg"> 
           {{$t('Type_a_number_in_case_you_dont_want_to_write_a_zero')}}
             </div>
                    <div
                    
                      class="invalid-feedback"
                      v-for="(error, index) in this.errorFor('living_room')"
                      :key="'living_room' + index"
                    >{{ error }}</div>
                  </div>

                  <div class=" form-group col-md-4 col-sm-12">
                    <label for="customRange3"> <span class="h6 thm-color font-weight-bold">
                       {{$t('majlis')}}
                        </span>
                        </label>
                    <input
                      type="number"
                      class="form-group form-control"
                      v-model="majlis"
                      :class="[{'is-invalid': errorFor('majlis'),
                                'is-valid':CheckMajlis=='true'
                              ,'is-invalid':CheckMajlis =='false',
                      }]"
                      placeholder="5" min="0"

                    />
                      <div v-if="CheckMajlis!=''"   
            class="invalid-feedback" :class="msg"> 
           {{$t('Type_a_number_in_case_you_dont_want_to_write_a_zero')}}
             </div>
                    <div
                      class="invalid-feedback"
                      v-for="(error, index) in this.errorFor('majlis')"
                      :key="'majlis' + index"
                    >{{ error }}</div>
                  </div>
                  <div class="form-group  col-md-4 col-sm-12">
                    <label for="customRange3">
                         <span class="h6 thm-color font-weight-bold">
                        {{$t('kitchens')}}
                         </span>
                        </label>
                    <input
                      type="number"
                      class="form-control"
                      v-model="kitchens"
                      :class="[{'is-invalid': errorFor('kitchens') 
                      ,'is-valid':CheckKitchen=='true'
                      ,'is-invalid':CheckKitchen =='false',}]"
                      placeholder="  5" min="0"

                    />
                      <div v-if="CheckKitchen!=''"   
            class="invalid-feedback" :class="msg"> 
                       {{$t('Type_a_number_in_case_you_dont_want_to_write_a_zero')}}

             </div>
                    <div
                      class="invalid-feedback"
                      v-for="(error, index) in this.errorFor('kitchens')"
                      :key="'kitchens' + index"
                    >{{ error }}</div>
                  </div>
                </div>

                <div class="row">
                  <div class=" form-group   col-md-6 col-sm-12">
                    <label for="customRange3"> <span class="h6 thm-color font-weight-bold">
                       {{$t('dining')}}
                        </span>
                         </label>
                    <input
                      type="number"
                      class="form-control"
                      v-model="dining_room"
                       placeholder="5" min="0"
                      :class="[{'is-invalid': errorFor('dining_room')
                                ,'is-valid':CheckDining=='true'
                              ,'is-invalid':CheckDining =='false'}]"/>
                              

                      <div v-if="CheckDining!=''"   
            class="invalid-feedback" :class="msg"> 
                                   {{$t('Type_a_number_in_case_you_dont_want_to_write_a_zero')}}

             </div>
                    <div
                      class="invalid-feedback"
                      v-for="(error, index) in this.errorFor('dining_room')"
                      :key="'dining_room' + index"
                    >{{ error }}</div>
                  </div>
                  <div class=" form-group col-md-6 col-sm-12">
                    <label for="customRange3">
                         <span class="h6 thm-color font-weight-bold">
                        {{$t('bathroom')}}
                         </span>
                        </label>
                    <input
                      type="number"
                      class="form-control"
                      v-model="bathroom"

                      :class="[{'is-invalid': errorFor('bathroom')
                         ,'is-valid':CheckBath=='true'
                              ,'is-invalid':CheckBath =='false' }]"
                     placeholder="  5" min="0" />
                      <div v-if="CheckBath!=''"   
            class="invalid-feedback" :class="msg"> 
  {{$t('Type_a_number_in_case_you_dont_want_to_write_a_zero')}}

             </div>
                    <div
                      class="invalid-feedback"
                      v-for="(error, index) in this.errorFor('bathroom')"
                      :key="'bathroom' + index"
                      placeholder="5" min="0"

                    >{{ error }}</div>
                  </div>
                </div>


                <div class="h6 font-weight-bold  thm-color">    
                   
                    {{$t('Service_room_distribution_site')}}
                    <span class="text-muted">
                  (
                       {{$t('subtitle_Service_room_distribution_site')}}
                  )
                    </span>
                     </div>

                          <div class="form-group ">
    <label class="checkbox d-bolck" :dir="$t('directions')" >

  <input type="radio" name="replacement" value="inside"
                    v-model="position">
  <span class="check" style="border-radius:10px"></span>
   <span class="mr-4 ml-4">  {{$t('inside')}}
   
        </span>
</label>

 <label class="checkbox d-bolck" :dir="$t('directions')">

  <input type="radio" name="replacement"   value="outside"
                    v-model="position">
  <span class="check" style="border-radius:10px"></span>
  <span class="mr-4 ml-4 ">
   {{$t('outside')}}
   

      </span>
</label>
                                </div>
                <!-- <div class="form-check">
                  <label class="form-check-label" for="flexRadioDefault3">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault3"
                      id="flexRadioDefault3 "
                      value="inside"
                      v-model="position"
                    />
                    inside villa
                    <sub>
                      <i class="text-muted">MAID ROOM + MAIN KITCHEN + STORE</i>
                    </sub>
                  </label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault3"
                    id="flexRadioDefault3"
                    value="outside"
                    v-model="position"
                  />
                  <label class="form-check-label" for="flexRadioDefault3">Outside villa</label>
                  <div
                    class="invalid-feedback"
                    v-for="(error, index) in this.errorFor('position')"
                    :key="'position' + index"
                  >{{ error }}</div>
                </div> -->

                <!--<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault3" value="both" v-model="position">
  <label class="form-check-label" for="flexRadioDefault3">
    Both
  </label>
</div>
                -->




                <!-- <div for="points"> ( الف {{Minval}} -  مليون {{Maxval}} ): الميزانية</div> -->
<!-- <input type="range" id="points" name="points" min="800" max="5000" v-model="Minval">


<input type="range" id="points" name="points" min="5000" max="5000" v-model="Maxval"> -->

                <div class="budget">
                  <div class="h6 mb-3 thm-color font-weight-bold">{{$t('budget')}}</div>
                  <div class="row">
                    <div class="  col-md-6 col-sm-12" >
                      <div class="form-group mb-2">
                        <label  >{{$t('from')}}</label>

                        <input
                        
                          class="form-control osition-relative"
                          id="inlineFormInputGroup"
                          placeholder="0.00 "
                          v-model="min"
                          :class="[{'is-invalid': errorFor('min'),
                                    'is-invalid': CheckMax < CheckMin ,
                                    'is-valid': CheckMax > CheckMin
                          }]"
                        />
                     
                          <div v-if=" CheckMax < CheckMin  "   
            class="invalid-feedback" :class="msg"> 
{{$t('The_minimum_value_price_must_be_less_than_the_maximum')}}             </div>
                        <!-- <div class="input-group-prepend">
                           <div class="input-group-text">{{$t('aed')}}</div>
                        </div> -->
                        <div
                          class="invalid-feedback"
                          v-for="(error, index) in this.errorFor('min')"
                          :key="'min' + index"
                        >{{ error }}</div>
                      </div>
                    </div>
                    <div class="  form-group col-md-6 col-sm-12" dir="rtl">
                      <label >{{$t('to')}}</label>
                      <div class="input-group mb-2">
                        <input
                      
                          class="form-control "
                          id="inlineFormInputGroup"
                          placeholder="0.00 "
                          v-model="max"
                          
                          :class="[{'is-invalid': errorFor('max'),
                                   'is-invalid': CheckMax < CheckMin ,
                                    'is-valid': CheckMax > CheckMin
                          }]"
                        />

                        <!-- <div class="input-group-prepend">
                          <div class="input-group-text">{{$t('aed')}}</div>
                        </div> -->
                        <div
                          class="invalid-feedback"
                          v-for="(error, index) in this.errorFor('max')"
                          :key="'max' + index"
                        >{{ error }}</div>
                      </div>
                    </div>
                  </div>
                </div>



                <div class="  mb-3">


											<!-- Property Tab One -->


														<div class="row">
<div class="col-12">
<div class="single-property-details">
<label>{{$t('Emirates')}}
        <div class="nice-select form-control "
         :class="[open_select,{'is-valid':emirates_selected !=''}]" tabindex="0" @click="open('emirates')">
            <span class="current">
                <all-uae :emirates="emirates_selected"></all-uae></span>
                <ul class="list">
                <li data-value="1" class="option " @click="emiratesChoose(7)">{{$t('abu_dabhi')}}</li>
                  <li data-value="2" class="option" @click="emiratesChoose(1)">{{$t('dubai')}} </li>
                  <li data-value="3" class="option"  @click="emiratesChoose(5)">{{$t('sharja')}}</li>
                  <li data-value="3" class="option"  @click="emiratesChoose(6)">{{$t('ajman')}}</li>
                  <li data-value="3" class="option"  @click="emiratesChoose(4)">{{$t('um_alqwin')}} </li>
                  <li data-value="3" class="option"  @click="emiratesChoose(3)"> {{$t('ras_alkhima')}}</li>
                  <li data-value="3" class="option"  @click="emiratesChoose(2)">{{$t('fujairah')}} </li>
                            </ul>
                    </div>
                    </label>

</div>
</div>
                                                        </div>




                  <!-- <label for="date">الامارة</label>
                  <select
                    class="form-control "
                    v-model="emirates"
                    :class="[{'is-invalid': errorFor('emirates')}]"
                  >
                    <div
                      class="invalid-feedback"
                      v-for="(error, index) in this.errorFor('emirates')"
                      :key="'emirates' + index"
                    >{{ error }}</div>
                 <option value=7>{{$t('abu_dabhi')}}</option>
                <option value=1>{{$t('dubai')}}</option>
                <option value=5>{{$t('sharja')}}</option>
                <option value=6>{{$t('ajman')}}</option>
                <option value=4>{{$t('um_alqwin')}}</option>
                <option value=3>{{$t('ras_alkhima')}}</option>
                <option value=2>{{$t('fujairah')}}</option>
                  </select> -->
                </div>

                <div class=" form-group mt-3">
                  <label for="exampleFormControlTextarea1">{{$t('Desription')}}</label>
                  <textarea
                  style="background:#fff"
                    class="form-control"
                    id="exampleFormControlTextarea1"
                    rows="4"
                    v-model="Notes"
                    :class="[{'is-invalid': errorFor('Notes')},
                             {'is-invalid':CheckNotes=='false'},
                             {'is-valid':CheckNotes=='true'}
                    ]"
                      :placeholder="$t('long_descripe')"

                  ></textarea>
                          <div
                    class="invalid-feedback"
                    v-for="(error, index) in this.errorFor('Notes')"
                    :key="'Notes' + index"
                  >{{ error }}</div>
                </div>
                    <div v-if="CheckNotes=='false'"   
            class="invalid-feedback" :class="msg"> 
            {{$t('write_desc')}}
             </div>
             <div class="form-group">
    <p class="theme-color  font-weight-bold">      {{$t('mobile')}}</p>

  <input type="text" class="form-control" placeholder="(971) XXX-XXXXXX" v-model="phone" dir="ltr"
  
   :class="[{'is-invalid':CheckLMobile=='false' }, {'is-valid':CheckLMobile=='true'}]">
                
</div>

    <div v-if="CheckLMobile=='false'"   
            class="invalid-feedback" :class="msg"> 
            {{$t('must_be_12_digits')}}
             </div>

<div class="form-group">
    <p class="theme-color  font-weight-bold">        {{$t('whatsapp')}}</p>

  <input type="text" class="form-control" placeholder="(971) XXX-XXXXXX" v-model="whatsapp" dir="ltr" 
  :class="[{'is-invalid':CheckLWhatsapp=='false'}, {'is-valid':CheckLWhatsapp=='true'}]">

       <div v-if="CheckLWhatsapp=='false'"   
            class="invalid-feedback" :class="msg"> 
            {{$t('must_be_12_digits')}}
             </div>
            
                
</div>

  <sup>jpg , png </sup>
<div class="form-group  file-style">
  
          <label class="  ">
            
 <span class="btn btn-secondary" :class="{'btn btn-success':map!=null}"  @click="$refs.fileinputMap" >
                  <!-- <i class="fa fa-file"></i> -->
                    {{$t('land_map')}}
                    </span>
                    <div class=" text-danger" v-if="FileNotMapAllowd!=null">{{FileNotMapAllowd}}</div>
              
                <input type="file" class="form-control"  @change="fileMap" style="display:none" ref="fileinputMap">
          </label>
               


                 <img v-if="map!=null" :src="url2" style="width:50; height:50px;border-radius: 10px;">
          
<div class="progress" v-if="progress22" style="hieght:10px !important">
  <div class="progress-bar  progress-bar-striped bg-success" role="progressbar"
   :style="'width:'+progress22+';hieght:10px !important'" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>

</div>
<!-- <div class="form-group">
            <label>
                {{$t('notes')}}
                <textarea class="form-control"> </textarea>
            </label>
</div> -->

            <div class=" form-group" dir="rtl">
            <p class="font-weight-bold theme-color"> {{$t('build_by')}}</p>

        <label class="checkbox d-bolck" :dir="$t('directions')" >
            <input type="radio"  value="1" name="typeBuild"  v-model="typeBuild">
            <span class="check" style="border-radius:10px"></span>
            <span class="mr-4 ml-4">{{$t('Loan')}}</span>
         </label>
             <label class="checkbox d-bolck" :dir="$t('directions')" >
            
           <input type="radio" value="2"  name="typeBuild"  v-model="typeBuild">
            <span class="check" style="border-radius:10px"></span>
            <span class="mr-4 ml-4">{{$t('Grant')}}</span>
             </label>
</div>
            

            <div class="form-group">
                <div class=" font-weight-bold theme-color" dir="rtl">
{{$t('Mention_the_loan_amount')}}
<sup class="text-danger"> ({{$t('optional')}})</sup>
                </div>
  <input type="text" class="form-control" placeholder="" v-model="priceGrant">
                
</div>


        <div class=" form-group" dir="rtl">
<p class=" font-weight-bold theme-color">  {{$t('Grant_Provider')}} </p>

             
    <label class="checkbox d-bolck" :dir="$t('directions')" >
            <input type="radio"  value="1" name="Provider" aria-label="Checkbox for following text input" v-model="Provider">
            <span class="check" style="border-radius:10px"></span>
            <span class="mr-4 ml-4">   {{$t('Sheikh_Zayed_Housing_Program')}}</span>
    </label>
     <label class="checkbox d-bolck" :dir="$t('directions')" >
            <input type="radio"  value="2" name="Provider" aria-label="Checkbox for following text input" v-model="Provider">
            <span class="check" style="border-radius:10px"></span>
            <span class="mr-4 ml-4">{{$t('Sheikh_Mohammed_bin_Rashid_Housing_Program')}}</span>
     </label>
     <label class="checkbox d-bolck" :dir="$t('directions')" >
            <input type="radio"  value="3" name="Provider" aria-label="Checkbox for following text input" v-model="Provider">
            <span class="check" style="border-radius:10px"></span>
            <span class="mr-4 ml-4">{{$t('AbuDhabi_Housing_Program')}}</span>
     </label>
      <label class="checkbox d-bolck" :dir="$t('directions')" >
            <input type="radio"  value="4" name="Provider" aria-label="Checkbox for following text input" v-model="Provider">
            <span class="check" style="border-radius:10px"></span>
            <span class="mr-4 ml-4">{{$t('Sharjah_Housing_Program')}}</span>
      </label>

      <label class="checkbox d-bolck" :dir="$t('directions')" >
            <input type="radio"  value="5" name="Provider" aria-label="Checkbox for following text input" v-model="Provider">
            <span class="check" style="border-radius:10px"></span>
            <span class="mr-4 ml-4">{{$t('Sharjah_Esnad_Housing_Program')}}</span>
      </label>
   <label class="checkbox d-bolck" :dir="$t('directions')" >
            <input type="radio"  value="6" name="Provider" aria-label="Checkbox for following text input" v-model="Provider">
            <span class="check" style="border-radius:10px"></span>
            <span class="mr-4 ml-4">  {{$t('Diwan')}}</span>
   </label>

        </div>

        <div class="">

    <p class="theme-color font-weight-bold">{{$t('Grant_Funding_Bank')}} 
<sup class="text-danger"> ({{$t('optional')}})</sup>
    </p>
<div class="form-group">
<input type="text" class="form-control" placeholder="" v-model="BankProvider">
</div>
        </div>

            
            <div class="form-group">
                <div class=" font-weight-bold theme-color" dir="rtl">
{{$t('Approximate_added_amount_Financing_method')}}
<sup class="text-danger"> ({{$t('optional')}})</sup>
                </div>
  <input type="text" class="form-control" placeholder="" v-model="finance">
                
</div>


          
  


                             <span class="thm-color">
                                 {{$t('Attach_examples')}}
                                  </span>
                                  <small> ({{$t('optional')}}) </small>
                                 

                                  
          <div class="form-group container file-style" >

              <label class=" mt-2 ">

            <span class="btn btn-light " @click="$refs.ete" v-if="files==''" 
             style="background: #3454d1; !importnat; color:#fff">
                  <span class=" fa fa-paperclip"></span>
                </span>

          <span class="btn  btn-light " @click="$refs.ete" v-else style="background: #3454d1; !importnat; color:#fff"><span class=" fa fa-paperclip" ></span></span>

          <input  class="form-control" type="file"   style="display:none" ref="ete" @change.prevent="onImageChanged"
           id="file" multiple>






      </label>

                                <span class="ttm-color">      {{$t('add_photos')}}  . </span>

                </div>

<div class="form-group">
     <strong v-if="FileNotAllowd" class="text-danger">{{FileNotAllowd}}</strong>
        <div class="image-preview" v-show="images.length">
            <div class="image-wrapper mt-3 " v-for="(image,i) in images" :key="i">
                <span v-if="files[i].name!=null">

                <span v-if="progressbar" class="">
                   <span class=""> {{progressbar}}</span>
                    </span>
<div class="progress" v-if="progressbar" style="hieght:10px !important">
  <div v-if="progressbar!='100%'" class="progress-bar  progress-bar-striped bg-primary"
   role="progressbar" :style="'width:'+progressbar+';hieght:10px !important; '" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
  <div v-if="progressbar=='100%'" class="progress-bar   bg-success" role="progressbar"
   :style="'width:'+progressbar+';hieght:10px !important;background-color:#3454d1 !important'" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

</div>


<span v-if="progressbar!=null"  class="main-color"> {{files[i].name}}
    <small class="text-muted  " v-if="files[i].size"> ({{files[i].size}} KB) </small>
</span>
<span class="btn btn-light float-left"  v-if="progressbar">

<span class="fa fa-close    " @click.prevent='removeImage(i)'></span>
</span>


                </span>



            </div>
        </div>

</div>


                    <button class=" btn btn-download  mt-3 font-weight-bold" :disabled="loading"
                     >
                     {{$t('post_now')}}
                     </button>
                   


              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <conditions></conditions>
      </div>
    </div>

  </div>

</template>

<script>
import conditions from "./conditions.vue";
import ValidationErrors from "../shared/components/ValidationErrors.vue";
import validationErrors from "../shared/mixins/validationErrors";
import AllUae from '../auth/AllUae.vue';

export default {
  components: { conditions, ValidationErrors, AllUae },
  mixins: [validationErrors],

  data() {
    return {

         FileNotMapAllowd:null,
        FileNotpassportAllowd:null,
        filePassportName:null,
        map:null,
        MapPath:null,
      phone:null,
        whatsapp:null,
         priceGrant:null,
         BankProvider:null,
         Provider:null,
          progress2:null,
        
         typeBuild:null,
         progress:0,
         
    

           file:null,
                success: '',
                FileNotSoilAllowd:null,
                resultSize:null,
                resultName:null,
               
        soil:null,
             images:[],
        Minval:800,
        Maxval:1,
        progressbar:[],
        FileNotAllowd:'',
        villa: '',
        floor: '',
        position: '',
        mastar_room: '',
        bedroom: '',
        living_room: '',
        majlis: '',
        kitchens: '',
        dining_room: '',
        bathroom: '',
        both: '',
      
       
        Notes: '',
        title: '',
        Checktitle:'',
        CheckMaster:'',
        CheckRoom:'',
        CheckBath:'',
        CheckMajlis:'',
        CheckKitchen:'',
        CheckLiving:'',
        CheckLMobile:'',
        CheckLWhatsapp:'',
        CheckDining:'',
        min: null,
        max: null,
        CheckMin:0,
        CheckMax:0,
      files: [],
      success: "",
      errors: null,
      status: null,
    open_select:null,
    emirates_selected:'',

     open_select_finshing:null,
    finshing_selected:'',
    msg:null,
    validation:true,
    CheckNotes:'',
    square:'H',  
    other:'',
    crypt:'',  
    loading:false,
       resultsoilSize :null,
        resultsoilName :null,
        progress888 :null,
        FileNotsoilAllowd:null,
        soil:null,
        resulSoilPath:null,
        finance:null,
        

  
    };
    
  },
 
    

    watch:{
 phone(value) {
         this.CheckVal(value,'mobile')

        var x = this.phone.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,6})/);
  this.phone = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
   
    },
	 whatsapp(value) {
      this.CheckVal(value,'whatsapp')
        var x = this.whatsapp.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,6})/);
  this.whatsapp = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
 
  
    },
    priceGrant(newValue){
            const result = newValue.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
     this.priceGrant = result;
    },
        finance(newValue){
            const result = newValue.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
     this.finance = result;
    },

     dining_room(value){
       this.CheckVal(value,'dining')
     },
      majlis(value){
       this.CheckVal(value,'majlis')
     },
      kitchens(value){
       this.CheckVal(value,'kitchens')
     },
     bathroom(value){
       this.CheckVal(value,'bath')
     },
      Notes(value){
       
        this.CheckVal(value,'Notes')
      },

      title(value){
        this.CheckVal(value,'title')
      },
      mastar_room(value){
       
           this.CheckVal(value,'master')
      },
      bedroom(value){
        this.CheckVal(value,'bedroom')
      },
       living_room(value){
       this.CheckVal(value,'living')
     },
          min(newValue) {
            
              this.CheckMin = parseFloat(newValue.replace(/,/g, ''));
          console.log(this.CheckMin);
      const result = newValue.replace(/\D/g, "")
        .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      Vue.nextTick(() => this.min = result);
    },
       max(newValue) {
         
         this.CheckMax = parseFloat(newValue.replace(/,/g, ''));
          console.log(this.CheckMax);
      const result = newValue.replace(/\D/g, "")
        .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      Vue.nextTick(() => this.max = result);
    },
   },

  methods: {
   
                         onSoilChange(event){
           this.soil=event.target.files[0];


const result1 = getFileExtension(this.soil.name);

             if(!this.soil.type.match('application/pdf') ){
                   this.FileNotsoilAllowd =`should be Pdf  `;
                    return ;
                }

                if(this.soil.size < 1048576){
let size = Math.floor(this.soil.size/1024);
this.resultName = this.soil.name   ;
this.resultSize = size+' KB' ;


             }
if(this.soil.size > 1048576){
let size = Math.floor(this.soil.size/1024);
this.resultName = this.soil.name   ;
this.resultSize = size+' MB' ;


}
                     function getFileExtension(filename){
    const extension = filename.split('.').pop();
    return extension;
    }

// passing the filename


           this.url2 = URL.createObjectURL(this.soil);

                 let data = new FormData();
          data.append("soil",this.soil,this.soil.name);

  const config = {
                    onUploadProgress:uploadEvent=>{
                    this.progress2 =  Math.round(uploadEvent.loaded / uploadEvent.total * 100 )+ '%';
                    // this.progress2 =  Math.round(uploadEvent.loaded / uploadEvent.total * 100 )+ '%';

                 }
                }


                axios.post('soilFile',data,config).then(res=>{
                    this.FileNotsoilAllowd=null
                    this.resulSoilPath=res.data;
                  
                });




       },
  

          
    VillaShape(event){
      this.square=event
      console.log(this.square)
    },
  CheckVal(value , value2){

        if(value2=='mobile'){
        if(value.length <= 0){
           this.CheckLMobile= 'false'
          this.msg="text text-danger"
         
        }else{
          this.CheckLMobile= 'true'
           this.msg=null
           
        }   
    }
           if(value2=='whatsapp'){
        if(value.length <= 0){
           this.CheckLWhatsapp= 'false'
          this.msg="text text-danger"
         
        }else{
          this.CheckLWhatsapp= 'true'
           this.msg=null
           
        }   
    }
      if(value2=='living'){
        if(value.length <= 0){
           this.CheckLiving= 'false'
          this.msg="text text-danger"
         
        }else{
          this.CheckLiving= 'true'
           this.msg=null
           
        }   
    }
       if(value2=='kitchens'){
        if(value.length <= 0){
           this.CheckKitchen= 'false'
          this.msg="text text-danger"
         
        }else{
          this.CheckKitchen= 'true'
           this.msg=null
           
        }   
    }
       if(value2=='majlis'){
        if(value.length <= 0){
           this.CheckMajlis= 'false'
          this.msg="text text-danger"
         
        }else{
          this.CheckMajlis= 'true'
           this.msg=null
           
        }   
    }
     if(value2=='dining'){
        if(value.length <= 0){
           this.CheckDining= 'false'
          this.msg="text text-danger"
         
        }else{
          this.CheckDining= 'true'
           this.msg=null
           
        }   
    }
 if(value2=='bath'){
        if(value.length <= 0){
           this.CheckBath= 'false'
          this.msg="text text-danger"
         
        }else{
          this.CheckBath= 'true'
           this.msg=null
           
        }   
    }
    if(value2=='title'){

        if(value.length <= 0){
           this.Checktitle= 'false'
          this.msg="text text-danger"
         
        }else{
          this.Checktitle= 'true'
           this.msg=null
           
        }   
    }
        if(value2=='master'){
        if(value.length <= 0){
           this.CheckMaster= 'false'
          this.msg="text text-danger"
        }else{
          this.CheckMaster= 'true'
           this.msg=null
        }   
         }

         if(value2=='bedroom'){
        if(value.length <= 0){
           this.CheckRoom= 'false'
          this.msg="text text-danger"
        }else{
          this.CheckRoom= 'true'
           this.msg=null
        }   
         }

              if(value2=='Notes'){
        if(value.length <= 0){
           this.CheckNotes= 'false'
          this.msg="text text-danger"
        }else{
          this.CheckNotes= 'true'
           this.msg=null
        }   
         }

         
        
   
   

  },
       open(event){
         
        if(event=='emirates'){
          this.open_select=="open" ? this.open_select='' : this.open_select="open"
        }
          if(event=='finishing'){
          this.open_select_finshing=="open" ? this.open_select_finshing='' : this.open_select_finshing="open"
        }



    },
     emiratesChoose(e){
       console.log(e)
        this.emirates_selected=e;
         $(this.open_select).remove();
    },
       finshing(e){
        this.finshing_selected=e;
         $(this.open_select_finshing).remove();
    },
    
              onImageChanged(event){
               const files = event.target.files;

               Array.from(files).forEach(file => this.addImage(file))


            },
            addImage(file){





    function getFileExtension(filename){

    // get file extension
    const extension = filename.split('.').pop();
    return extension;
}

// passing the filename
const result1 = getFileExtension(file.name);
console.log(result1);



                if(!file.type.match('image.*')){
                   this.FileNotAllowd =`should be jpg , png `;
                    return ;
                }

                this.files.push(file); //upload
                //preview of image
                const reader = new FileReader();
                reader.onload = (e)=>this.images.push(e.target.result)

            let data = new FormData();
          data.append("files",file,file.name);
                reader.readAsDataURL(file);
              console.log(file);
                 this.FileNotAllowd ='';



                // console.log('this file lenght '+i)
                     const config = {
                    onUploadProgress:uploadEvent=>{
                    this.progressbar =  Math.round(uploadEvent.loaded / uploadEvent.total * 100 )+ '%';
                    // this.progress2 =  Math.round(uploadEvent.loaded / uploadEvent.total * 100 )+ '%';

                 }

                }


                axios.post('sucess',data,config).then(res=>{
                    this.FileNotAllowd=null
                });
            },
            removeImage(i){
  let files = this.files;
  files.splice(i,1,'');
    console.log(files);




            },
    onChange(e) {
      this.file = e.target.files[0];
    },

       filePassport(event){
         this.passport=event.target.files[0];
         this.filePassportName = this.passport.name;
          if(!this.passport.type.match('image.*') ){
              this.passport=null
              this.progress=null
              this.progres2=null
                   this.FileNotpassportAllowd =`should be Jpg Or Png `;
                    return ;
                }

          let data = new FormData();
          data.append("passport",this.passport,this.passport.name);
         this.url1 = URL.createObjectURL(this.passport);
  const config = {
                    onUploadProgress:uploadEvent=>{
                    this.progress =  Math.round(uploadEvent.loaded / uploadEvent.total * 100 )+ '%';
                    // this.progress2 =  Math.round(uploadEvent.loaded / uploadEvent.total * 100 )+ '%';

                 }
                }


                axios.post('sucess',data,config).then(res=>{
                    this.FileNotpassportAllowd=null
                });




       },
       fileMap(event){
           this.map=event.target.files[0];

             if(! this.map.type.match('image.*') ){
                   this.FileNotMapAllowd =`should be Jpg Or Png `;
                    return ;
                }
           this.url2 = URL.createObjectURL(this.map);

                 let data = new FormData();
          data.append("map",this.map,this.map.name);

  const config = {
                    onUploadProgress:uploadEvent=>{
                    this.progress22 =  Math.round(uploadEvent.loaded / uploadEvent.total * 100 )+ '%';
                    // this.progress2 =  Math.round(uploadEvent.loaded / uploadEvent.total * 100 )+ '%';

                 }
                }


                axios.post('MapFile',data,config).then(res=>{
                    this.FileNotMapAllowd=null
                    this.MapPath = res.data;
                });




       },

    formSubmit() {
    
    if(this.title.length==0 ||  this.villa==null ||
        this.floor=='' || this.position=='' ||
        this.mastar_room=='' || this.bedroom=='' ||
        this.living_room=='' || this.majlis=='' ||
        this.kitchens=='' || this.bathroom=='' ||
        this.dining_room=='' || this.min=='' ||   this.crypt==''||
        this.max.length==0 || this.emirates_selected=='' || this.MapPath=='' ||
        this.Notes.length==0
        ||  this.phone==null|| this.whatsapp==null || this.priceGrant=='' || this.typeBuild=='' || this.resulSoilPath==''
    
        
         
               
        ){
          $('#falid').modal('show');
              
    }else{

      //data.append('imageAds', this.photo);
      this.loading= true;

      let data = new FormData();

      if(this.files!=''){
      this.files.forEach((file) => {
        data.append("images[]", file, file.name);
      });
      }
      /*
        this.files.forEach(file =>{
            data.append('images[]',file,file.name)
        })
        */

// if(this.square=='other'){
// if(this.other!=''){
//    data.append("villaShape",this.other);
// }
// }
// else{
//   data.append("villaShape",this.square);
//   if(this.other!=''){
//       this.other=''
//   }
  
// }
 


         data.append("phone",this.phone);
       data.append("whatsapp",this.whatsapp);
      data.append("priceGrant", this.priceGrant);
      data.append("BankProvider", this.BankProvider);
      data.append("Provider", this.Provider);
            data.append("finance", this.finance);

      data.append("typeBuild", this.typeBuild);
      data.append("mapPath", this.MapPath);



       data.append("crypt",this.crypt);
       data.append("villaShape",this.square);
      data.append("villa_type", this.villa);
      data.append("floor", this.floor);
      data.append("position", this.position);

      data.append("mastar_room", this.mastar_room);
      data.append("bedroom", this.bedroom);
      data.append("living_room", this.living_room);
      data.append("majlis", this.majlis);
      data.append("kitchens", this.kitchens);
      data.append("bathroom", this.bathroom);
      data.append("dining_room", this.dining_room);
      data.append("min", this.min);
      data.append("max", this.max);
      data.append("emirates", this.emirates_selected);
      data.append("finishing", this.finshing_selected);
      data.append("soil", this.resulSoilPath);
      
      data.append("title", this.title);
      data.append("Notes", this.Notes);

      axios
        .post(`/tenders`, data)
        .then(response=>{
          this.status = response.data;
          let id = this.status;
          this.loading=true

          this.$router.push({ name: "project", params: { id } });
          localStorage.setItem('messageTender',JSON.stringify(this.message));
        })
        .catch(error=>{
            if(422===error.response.status){
                // console.log(error.response.data.errors);
                this.errors=error.response.data.errors
            }
            this.status=error.response.status

        })
        .then(() => ((this.loading = false), (this.ret = false)));
    }
    },
    errorFor(field) {
      return this.hasErrors && this.errors[field] ? this.errors[field] : null;
    },
  },
  computed: {
    hasErrors() {
      return 422 === this.status && this.errors !== null;
    },
 
      nameState() {
        return this.name.length > 2 ? true : false
      }
    
  },
};
</script>
<style scoped>
.shapeVilla{
  
}
.shapeVilla h4{
  
  padding: 5px;
  margin-left: 5px;
  margin-right: 5px;
  border:1px solid rgb(155, 155, 155);
  background: #fff;
  border-radius: 10px;
  cursor: pointer;
}
.shapeVilla h4.checked , p.checked{

  border:1px #0ed678 solid;
  color: #0ed678;

}
.square {

    height: 20px;
    width: 20px;
    border: 2px solid black;
    border-radius: 5px;

}

.single-property-details .nice-select {
    width: 100%;
    height: 60px;
    border-radius: 12px;
    border: 1px solid #cfc9c9;
    box-shadow: none;
    color: #818790;
    font-size: 14px;
    padding: 15px 30px;
    font-weight: 400;
    margin: 0;
}
</style>

<style scoped>

</style>