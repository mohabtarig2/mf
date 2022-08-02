<template>
    <div>

    <div class="row">
          <div class="col-md-3 col-sm-12">
                  <div class="properties-s-widget text-right" dir="rtl" >
                      <div class="h5"> {{$t('Consulting_Tender')}}</div>


                        <div class="text-dark mt-3">
                             {{counts.ConsluteComplete  }}
                            {{$t('complete')}}
                             <span class="float-left">  {{
                               Math.floor((counts.ConsluteComplete * 100)/
                                 counts.AllTendersConsulate) || 0

                                 }}% </span>
                        </div>


                      <div class="progress progress--slim">
                            <div class="progress-bar bg-success " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" :style="'width:'+
                            (counts.ConsluteComplete * 100)/
                                 counts.AllTendersConsulate+'%'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>

                        <div class="text-dark mt-3">
                            {{counts.ConsluteExcuted}}

                            {{$t('UnderExcute')}}
                            <span class="float-left">  {{
                                 Math.floor((counts.ConsluteExcuted * 100)/
                                 counts.AllTendersConsulate) || 0

                                 }}% </span>
                            </div>
                      <div class="progress progress--slim">
                            <div class="progress-bar  warning-tender" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                             :style="'width:'+Math.floor((counts.ConsluteExcuted * 100)/
                                 counts.AllTendersConsulate)+'%'">
                                <span class="sr-only">{{Math.floor((counts.ConsluteExcuted * 100)/
                                 counts.AllTendersConsulate)
                                 || 0
                                 }}%</span>
                            </div>
                        </div>
                              <div class="text-dark mt-3">
                                  {{counts.ConsluteReview}}
                                  {{$t('UnderProcess')}}
                                                   <span class="float-left">  {{
                                Math.floor( (counts.ConsluteReview * 100)/
                                 counts.AllTendersConsulate)
|| 0
                                 }}% </span>
                                  </div>

                      <div class="progress progress--slim">
                            <div class="progress-bar bg-warning " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                            :style="'width:'+Math.floor((counts.ConsluteReview * 100)/
                                 counts.AllTendersConsulate) +'%;'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>
                              <div class="text-dark mt-3">
                                  {{counts.ConsluteDraft}}
                                  {{$t('Draft')}}
                            <span class="float-left">
                                  {{ Math.floor((counts.ConsluteDraft * 100) /counts.AllTendersConsulate)
                                  || 0
                                  }}%
                                 </span>
                                   </div>

                      <div class="progress progress--slim">
                            <div class="progress-bar bg-secondary " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                             :style="'width:'+Math.floor((counts.ConsluteDraft * 100) /counts.AllTendersConsulate)+'%;'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>

                              <div class="text-dark mt-3">
                                {{counts.ConsluteOpen}}
                                  {{$t('open')}}
                                  <span class="float-left">
                                  {{ Math.floor((counts.ConsluteOpen * 100) /counts.AllTendersConsulate)   || 0}}%
                                 </span>
                                  </div>

                      <div class="progress progress--slim">
                            <div class="progress-bar  before-complete" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100" :style="'width:'+Math.floor((counts.ConsluteOpen * 100) /counts.AllTendersConsulate)+ '%;'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>
                               <div class="text-dark mt-3">
                                                                     {{counts.ConsluteClosed}}
                                   {{$t('Closed')}}
<span class="float-left">
                                  {{ Math.floor((counts.ConsluteClosed * 100) /counts.AllTendersConsulate)   || 0 }}%
                                 </span>
                                     </div>

                      <div class="progress progress--slim">
                            <div class="progress-bar closed-tender " role="progressbar" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100" :style="'width:'+ Math.floor((counts.ConsluteClosed * 100) /counts.AllTendersConsulate)+'%'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>

                  </div>
           </div>


                  <div class="col-md-3 col-sm-12">
                  <div class="properties-s-widget text-right" dir="rtl" >
                      <div class="h5"> {{$t('Interior_Tender')}} </div>


                        <div class="text-dark mt-3">
                             {{counts.interiorComplete  }}
                            {{$t('complete')}}
                             <span class="float-left">  {{
                               Math.floor((counts.interiorComplete * 100)/
                                 counts.AllTenderInterior) || 0

                                 }}% </span>
                        </div>


                      <div class="progress progress--slim">
                            <div class="progress-bar bg-success " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" :style="'width:'+
                            (counts.interiorComplete * 100)/
                                 counts.AllTenderInterior   +'%'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>

                        <div class="text-dark mt-3">
                            {{counts.interiorExcuted}}

                           {{$t('UnderExcute')}}
                            <span class="float-left">  {{
                                 Math.floor((counts.interiorExcuted * 100)/
                                 counts.AllTenderInterior   ) || 0

                                 }}% </span>
                            </div>
                      <div class="progress progress--slim">
                            <div class="progress-bar  warning-tender" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                             :style="'width:'+Math.floor((counts.interiorExcuted * 100)/
                                 counts.AllTenderInterior   )+'%'">
                                <span class="sr-only">{{Math.floor((counts.interiorExcuted * 100)/
                                 counts.AllTenderInterior   )
                                 || 0
                                 }}%</span>
                            </div>
                        </div>
                              <div class="text-dark mt-3">
                                  {{counts.interiorReview}}
                                {{$t('UnderProcess')}}
                                                   <span class="float-left">  {{
                                Math.floor( (counts.interiorReview * 100)/
                                 counts.AllTenderInterior   )
|| 0
                                 }}% </span>
                                  </div>

                      <div class="progress progress--slim">
                            <div class="progress-bar bg-warning " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                            :style="'width:'+Math.floor((counts.interiorReview * 100)/
                                 counts.AllTenderInterior   ) +'%;'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>
                              <div class="text-dark mt-3">
                                  {{counts.ConsluteDraft}}
                                  {{$t('Draft')}}
                            <span class="float-left">
                                  {{ Math.floor((counts.ConsluteDraft * 100) /counts.AllTenderInterior   )
                                  || 0
                                  }}%
                                 </span>
                                   </div>

                      <div class="progress progress--slim">
                            <div class="progress-bar bg-secondary " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                             :style="'width:'+Math.floor((counts.ConsluteDraft * 100) /counts.AllTendersConsulate)+'%;'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>

                              <div class="text-dark mt-3">
                                {{counts.ConsluteOpen}}
                                  {{$t('open')}}
                                  <span class="float-left">
                                  {{ Math.floor((counts.ConsluteOpen * 100) /counts.AllTenderInterior   )   || 0}}%
                                 </span>
                                  </div>

                      <div class="progress progress--slim">
                            <div class="progress-bar  before-complete" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100" :style="'width:'+Math.floor((counts.ConsluteOpen * 100) /counts.AllTendersConsulate)+ '%;'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>
                               <div class="text-dark mt-3">
                                                                     {{counts.ConsluteClosed}}
                                   {{$t('Closed')}}
<span class="float-left">
                                  {{ Math.floor((counts.ConsluteClosed * 100) /counts.AllTenderInterior   )   || 0 }}%
                                 </span>
                                     </div>

                      <div class="progress progress--slim">
                            <div class="progress-bar closed-tender " role="progressbar" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100" :style="'width:'+ Math.floor((counts.ConsluteClosed * 100) /counts.AllTendersConsulate)+'%'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>

                  </div>
              </div>
          <div class="col-md-3 col-sm-12">
                  <div class="properties-s-widget text-right" dir="rtl" >
                      <div class="h5"> {{$t('Conturction_Tender')}} </div>


                        <div class="text-dark mt-3">
                             {{counts.ConsrComplete }}
                            {{$t('complete')}}
                             <span class="float-left">  {{
                               Math.floor((counts.ConsrComplete * 100)/
                                 counts.AllTenderConsr)

                                 || 0}}% </span>
                        </div>


                      <div class="progress progress--slim">
                            <div class="progress-bar bg-success " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" :style="'width:'+
                            (counts.ConsrComplete * 100)/
                                 counts.AllTenderConsr+'%'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>

                        <div class="text-dark mt-3">
                            {{counts.ConsrExcuted}}

                            {{$t('UnderExcute')}}
                            <span class="float-left">  {{
                                 Math.floor((counts.ConsrExcuted * 100)/
                                 counts.AllTenderConsr)

                                 || 0}}% </span>
                            </div>
                      <div class="progress progress--slim">
                            <div class="progress-bar  warning-tender" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                             :style="'width:'+Math.floor((counts.ConsrExcuted * 100)/
                                 counts.AllTenderConsr)+'%'">
                                <span class="sr-only">{{Math.floor((counts.ConsrComplete * 100)/
                                 counts.AllTenderConsr)}}%</span>
                            </div>
                        </div>
                              <div class="text-dark mt-3">
                                  {{counts.ConsrReview}}
                                  {{$t('UnderProcess')}}
                                                   <span class="float-left">  {{
                                Math.floor( (counts.ConsrReview * 100)/
                                 counts.AllTenderConsr)

                                 || 0}}% </span>
                                  </div>

                      <div class="progress progress--slim">
                            <div class="progress-bar bg-warning " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                            :style="'width:'+Math.floor((counts.ConsrReview * 100)/
                                 counts.AllTenderConsr) +'%;'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>
                              <div class="text-dark mt-3">
                                  {{counts.ConsrDraft}}
                                  {{$t('Draft')}}
                            <span class="float-left">
                                  {{ Math.floor((counts.ConsrDraft * 100) /counts.AllTenderConsr)}}%
                                 </span>
                                   </div>

                      <div class="progress progress--slim">
                            <div class="progress-bar bg-secondary " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                             :style="'width:'+Math.floor((counts.ConsrDraft * 100) /counts.AllTenderConsr)+'%;'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>

                              <div class="text-dark mt-3">
                                {{counts.ConsrOpen}}
                                  {{$t('open')}}
                                  <span class="float-left">
                                  {{ Math.floor((counts.ConsrOpen * 100) /counts.AllTenderConsr)}}%
                                 </span>
                                  </div>

                      <div class="progress progress--slim">
                            <div class="progress-bar  before-complete" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100" :style="'width:'+Math.floor((counts.ConsrOpen * 100) /counts.AllTenderConsr)+ '%;'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>
                               <div class="text-dark mt-3">
                                                                     {{counts.ConsrClosed}}
                                   {{$t('Closed')}}
<span class="float-left">
                                  {{ Math.floor((counts.ConsrClosed * 100) /counts.AllTenderConsr)}}%
                                 </span>
                                     </div>

                      <div class="progress progress--slim">
                            <div class="progress-bar closed-tender " role="progressbar" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100" :style="'width:'+ Math.floor((counts.ConsrClosed * 100) /counts.AllTenderConsr)+'%'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>

                  </div>
              </div>




   <div class="col-md-3 col-sm-12">
                  <div class="properties-s-widget text-right" dir="rtl" >
                      <div class="h5"> {{$t('hvac_Tender')}} </div>


                        <div class="text-dark mt-3">
                             {{counts.hvacComplete }}
                            {{$t('complete')}}
                             <span class="float-left">  {{
                               Math.floor((counts.hvacComplete * 100)/
                                 counts.AllTenderhvac)

                                 || 0}}% </span>
                        </div>


                      <div class="progress progress--slim">
                            <div class="progress-bar bg-success " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" :style="'width:'+
                            (counts.hvacComplete * 100)/
                                 counts.AllTenderhvac+'%'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>

                        <div class="text-dark mt-3">
                            {{counts.hvacExcuted}}

                            {{$t('UnderExcute')}}
                            <span class="float-left">  {{
                                 Math.floor((counts.hvacExcuted * 100)/
                                 counts.AllTenderhvac)

                                 || 0}}% </span>
                            </div>
                      <div class="progress progress--slim">
                            <div class="progress-bar  warning-tender" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                             :style="'width:'+Math.floor((counts.hvacExcuted * 100)/
                                 counts.AllTenderhvac)+'%'">
                                <span class="sr-only">{{Math.floor((counts.hvacComplete * 100)/
                                 counts.AllTenderhvac)}}%</span>
                            </div>
                        </div>
                              <div class="text-dark mt-3">
                                  {{counts.hvacReview}}
                                  {{$t('UnderProcess')}}
                                                   <span class="float-left">  {{
                                Math.floor( (counts.hvacReview * 100)/
                                 counts.AllTenderhvac)

                                 || 0}}% </span>
                                  </div>

                      <div class="progress progress--slim">
                            <div class="progress-bar bg-warning " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                            :style="'width:'+Math.floor((counts.hvacReview * 100)/
                                 counts.AllTenderhvac) +'%;'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>
                              <div class="text-dark mt-3">
                                  {{counts.hvacDraft}}
                                  {{$t('Draft')}}
                            <span class="float-left">
                                  {{ Math.floor((counts.hvacDraft * 100) /counts.AllTenderhvac)}}%
                                 </span>
                                   </div>

                      <div class="progress progress--slim">
                            <div class="progress-bar bg-secondary " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                             :style="'width:'+Math.floor((counts.hvacDraft * 100) /counts.AllTenderhvac)+'%;'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>

                              <div class="text-dark mt-3">
                                {{counts.hvacOpen}}
                                  {{$t('open')}}
                                  <span class="float-left">
                                  {{ Math.floor((counts.hvacOpen * 100) /counts.AllTenderhvac)}}%
                                 </span>
                                  </div>

                      <div class="progress progress--slim">
                            <div class="progress-bar  before-complete" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100" :style="'width:'+Math.floor((counts.hvacOpen * 100) /counts.AllTenderhvac)+ '%;'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>
                               <div class="text-dark mt-3">
                                                                     {{counts.hvacClosed}}
                                   {{$t('Closed')}}
<span class="float-left">
                                  {{ Math.floor((counts.hvacClosed * 100) /counts.AllTenderhvac)}}%
                                 </span>
                                     </div>

                      <div class="progress progress--slim">
                            <div class="progress-bar closed-tender " role="progressbar" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100" :style="'width:'+ Math.floor((counts.hvacClosed * 100) /counts.AllTenderhvac)+'%'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>

                  </div>
              </div>

                <div class="col-md-3 col-sm-12">
                  <div class="properties-s-widget text-right" dir="rtl" >
                      <div class="h5"> {{$t('stone_Tender')}}   </div>


                        <div class="text-dark mt-3">
                             {{counts.stoneComplete }}
                            {{$t('complete')}}
                             <span class="float-left">  {{
                               Math.floor((counts.stoneComplete * 100)/
                                 counts.AllTenderstone)

                                 || 0}}% </span>
                        </div>


                      <div class="progress progress--slim">
                            <div class="progress-bar bg-success " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" :style="'width:'+
                            (counts.stoneComplete * 100)/
                                 counts.AllTenderstone+'%'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>

                        <div class="text-dark mt-3">
                            {{counts.stoneExcuted}}

                            {{$t('UnderExcute')}}
                            <span class="float-left">  {{
                                 Math.floor((counts.stoneExcuted * 100)/
                                 counts.AllTenderstone)

                                 || 0}}% </span>
                            </div>
                      <div class="progress progress--slim">
                            <div class="progress-bar  warning-tender" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                             :style="'width:'+Math.floor((counts.stoneExcuted * 100)/
                                 counts.AllTenderstone)+'%'">
                                <span class="sr-only">{{Math.floor((counts.stoneComplete * 100)/
                                 counts.AllTenderstone)}}%</span>
                            </div>
                        </div>
                              <div class="text-dark mt-3">
                                  {{counts.stoneReview}}
                                  {{$t('UnderProcess')}}
                                                   <span class="float-left">  {{
                                Math.floor( (counts.stoneReview * 100)/
                                 counts.AllTenderstone)

                                 || 0}}% </span>
                                  </div>

                      <div class="progress progress--slim">
                            <div class="progress-bar bg-warning " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                            :style="'width:'+Math.floor((counts.stoneReview * 100)/
                                 counts.AllTenderstone) +'%;'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>
                              <div class="text-dark mt-3">
                                  {{counts.stoneDraft}}
                                  {{$t('Draft')}}
                            <span class="float-left">
                                  {{ Math.floor((counts.stoneDraft * 100) /counts.AllTenderstone)}}%
                                 </span>
                                   </div>

                      <div class="progress progress--slim">
                            <div class="progress-bar bg-secondary " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                             :style="'width:'+Math.floor((counts.stoneDraft * 100) /counts.AllTenderstone)+'%;'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>

                              <div class="text-dark mt-3">
                                {{counts.stoneOpen}}
                                  {{$t('open')}}
                                  <span class="float-left">
                                  {{ Math.floor((counts.stoneOpen * 100) /counts.AllTenderstone)}}%
                                 </span>
                                  </div>

                      <div class="progress progress--slim">
                            <div class="progress-bar  before-complete" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100" :style="'width:'+Math.floor((counts.stoneOpen * 100) /counts.AllTenderstone)+ '%;'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>
                               <div class="text-dark mt-3">
                                                                     {{counts.stoneClosed}}
                                   {{$t('Closed')}}
<span class="float-left">
                                  {{ Math.floor((counts.stoneClosed * 100) /counts.AllTenderstone)  || 0 }}%
                                 </span>
                                     </div>

                      <div class="progress progress--slim">
                            <div class="progress-bar closed-tender " role="progressbar" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100" :style="'width:'+ Math.floor((counts.stoneClosed * 100) /counts.AllTenderstone)+'%'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>

                  </div>
              </div>


    </div>

    <div class="row"  v-if="IsUser==1">
<div class="col-md-6">
 <div class="properties-s-widget text-right" dir="rtl" >
                 	<div class="a-property-price">

                         <h1 class="theme-color">{{counts.AllTenderConsr}}</h1>

								<h3 class="price-title fs-40"> {{$t('Group_of_tenders')}}</h3>

							</div>
							<div class="a-property-btn">
							<router-link :to="{name:'constructionTender'}" class="theme-btn">{{$t('start')}}</router-link>
							</div>




  </div>
</div>

<div class="col-md-6">
 <div class="properties-s-widget text-right" dir="rtl" >
                      <div class="h5"> {{$t('Conturction_Tender')}}</div>


                        <div class="text-dark mt-3">
                             {{counts.ConsrComplete }}
                            {{$t('complete')}}
                             <span class="float-left">  {{
                               Math.floor((counts.ConsrComplete * 100)/
                                 counts.AllTenderConsr)

                                 || 0}}% </span>
                        </div>


                      <div class="progress progress--slim">
                            <div class="progress-bar bg-success " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" :style="'width:'+
                            (counts.ConsrComplete * 100)/
                                 counts.AllTenderConsr+'%'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>

                        <div class="text-dark mt-3">
                            {{counts.ConsrExcuted}}

                            {{$t('UnderExcute')}}
                            <span class="float-left">  {{
                                 Math.floor((counts.ConsrExcuted * 100)/
                                 counts.AllTenderConsr)

                                 || 0}}% </span>
                            </div>
                      <div class="progress progress--slim">
                            <div class="progress-bar  warning-tender" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                             :style="'width:'+Math.floor((counts.ConsrExcuted * 100)/
                                 counts.AllTenderConsr)+'%'">
                                <span class="sr-only">{{Math.floor((counts.ConsrComplete * 100)/
                                 counts.AllTenderConsr)}}%</span>
                            </div>
                        </div>
                              <div class="text-dark mt-3">
                                  {{counts.ConsrReview}}
                                  {{$t('UnderProcess')}}
                                                   <span class="float-left">  {{
                                Math.floor( (counts.ConsrReview * 100)/
                                 counts.AllTenderConsr)

                                 }}% </span>
                                  </div>

                      <div class="progress progress--slim">
                            <div class="progress-bar bg-warning " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                            :style="'width:'+Math.floor((counts.ConsrReview * 100)/
                                 counts.AllTenderConsr) +'%;'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>
                              <div class="text-dark mt-3">
                                  {{counts.ConsrDraft}}
                                  {{$t('Draft')}}
                            <span class="float-left">
                                  {{ Math.floor((counts.ConsrDraft * 100) /counts.AllTenderConsr)   || 0}}%
                                 </span>
                                   </div>

                      <div class="progress progress--slim">
                            <div class="progress-bar bg-secondary " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                             :style="'width:'+Math.floor((counts.ConsrDraft * 100) /counts.AllTenderConsr)+'%;'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>

                              <div class="text-dark mt-3">
                                {{counts.ConsrOpen}}
                                  {{$t('open')}}
                                  <span class="float-left">
                                  {{ Math.floor((counts.ConsrOpen * 100) /counts.AllTenderConsr)   || 0}}%
                                 </span>
                                  </div>

                      <div class="progress progress--slim">
                            <div class="progress-bar  before-complete" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100" :style="'width:'+Math.floor((counts.ConsrOpen * 100) /counts.AllTenderConsr)+ '%;'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>
                               <div class="text-dark mt-3">
                                                                     {{counts.ConsrClosed}}
                                   {{$t('Closed')}}
<span class="float-left">
                                  {{ Math.floor((counts.ConsrClosed * 100) /counts.AllTenderConsr)}}%
                                 </span>
                                     </div>

                      <div class="progress progress--slim">
                            <div class="progress-bar closed-tender " role="progressbar" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100" :style="'width:'+ Math.floor((counts.ConsrClosed * 100) /counts.AllTenderConsr)+'%'">
                                <span class="sr-only">100%</span>
                            </div>
                        </div>

  </div>
</div>
    </div>


    </div>
</template>



<script>
import { mapState, mapGetters } from "vuex";
import Slick from 'vue-slick-carousel';
export default {
    components:{
        Slick,
    },
    data() {
        return {
            counts:null,
                   settings:{

prevArrow: true,
    nextArrow: true,
  infinite: true,
  speed: 500,
  slidesToShow: 5,

 arrows:true,

responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,

      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        initialSlide: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]

  },
     
        }
    },
    methods:{
      GetCounts() {
          if(this.IsUser==10){

               axios.get("countUserTenders").then((res) => {
                 this.counts = res.data;
      });
    console.log('im user');
          }
          else if(this.IsUser==1){
                 console.log('im enginner ');
                axios.get("counterConsulteTenders").then((res) => {
                 this.counts = res.data;
      });


          }


    },
    },
    created() {
        this.GetCounts();
    },
     computed: {
    ...mapState({

      isLoggedIn: "isLoggedIn"
    }),
    ...mapGetters({

    }),
    IsUser(){
            return this.$store.getters.IsUser
        },
    },
}
</script>


<style scoped>
.progress--slim {
    box-shadow: none;
    height: 8px;
    border-radius: 5px;
    background-color: #f0f0f0 !important;
}
.before-complete{
    background: #34d19b !important;
}
.bg-success , .bg-warning ,  .bg-danger ,.bg-dark , .bg-primary{
    background-color: #3454d1 !important;
}
</style>
