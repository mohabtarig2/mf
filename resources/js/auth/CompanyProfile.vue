<template>
<div :dir="$t('directions')" :class="$t('text_align')">
<!-- agent Detail Area  -->

<div v-for="user , index in company" :key="index">
  <section class="breadcrumbs-area" style="background-image:url('img/breadcrumbs-bg.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Breadcrumbs Content -->
					<div class="breadcrumbs-content">
						<h1 class="b-content-title m-0">{{user.company.company_en}}</h1>
						<!-- <ul class="breadcrumbs-menu list-none">
							<li><i class="fa fa-home"></i><a href="\">{{$t('home')}}</a></li>
						</ul> -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="agent-details-area" >

		<div class="container">
			<div class="agent-d-inner section-padding">
				<div class="row g-0 align-items-center">
					<div class="col-lg-5 col-12" data-aos="fade-right" data-aos-delay="200">
						<!-- agent Detail Image  -->
						<div class="agent-d-img">
							<img :src="user.avatar" alt="#" v-if="user.avatar">
							<img src="img/person-icon.png" alt="#" v-else>

							
						</div>
					</div>
					<div class="col-lg-7 col-12" data-aos="fade-left" data-aos-delay="300">
						<!-- agent Detail Content  -->
						<div class="s-blog-sidebar sidebar-tags">
						<div class="agent-details-content">
							<h2 class="agent-d-title">{{user.company.company_en}}</h2>
							<span>
                                {{type=="consulting" ? $t('consulting_company'):''}}
                                {{type=="construcion" ? $t('construcion_company'):''}}
                                {{type=="hvac" ? $t('HVAC_companies'):''}}
                                {{type=="stone" ? $t('Stone_companies'):''}}

                            </span>
							<ul class="agent-d-list list-none">
							
								
								<li><i class="fa fa-layer-group"></i>{{$t('since')}} {{user.company.date_create}}</li>
								<li><i class="fa fa-phone"></i>{{user.company.phone}}</li>
								<li><a href="#"><i class="fa fa-envelope"></i>{{user.email}}</a></li>
								<!-- <li><a href="#"><i class="fa fa-globe"></i>www.gear-house.com</a></li> -->
							</ul>
							<div class="agent-d-about">
								<h4 class="t-about-title">{{$t('about')}} </h4>
								<p class="m-0">
                                    {{user.company.about_us}}
                                    </p>
								

							</div>
							

										 				 
							<h4 class="b-sidebar-title">{{$t('Company_main_branch')}} </h4>
							<ul class="s-tags-inner list-none mb-3"  >
								<li ><a style="background:#3454d1; color:#fff">
												<all-uae :emirates="user.company.emirates"></all-uae>
									</a>
									</li>
				
							</ul>

					
							<h4 class="b-sidebar-title">{{$t('Company branches')}} </h4>
							<ul class="s-tags-inner list-none" v-if="user.branch.length > 0" >
								<li v-for="branch , index in user.branch" :key="index"><a>
									<all-uae :emirates="branch.emirates"></all-uae></a></li>
				
							</ul>
							<div v-else>
								{{$t('no_branchs')}}
							</div>
						
						
						</div>
						</div>
					</div>
				</div>
			</div>




		</div>
	</section>
    <section class="Achivment container">
<div  >
	
  	<div class="p-descrip-box rating" >

                        <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link " :class="{ 'active'  : active1}" @click="tabs(1)" >{{$t('company_files')}}</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" :class="{ 'active'  : active2}" @click="tabs(2)">
    {{$t('review_and_rating')}}</a>
  </li>


</ul>
						<div class="rating-reviews-main">
							<div class="review-add" v-if="active2==true">
								<h4 class="review-add-title fs-20">{{user.review.length}} Review</h4>
								<div class="review-add-main"  v-for="review ,index in user.review" :key="index" v-if="review">
									<div class="review-img">
										<img :src="review.user.avatar" alt="#" width="126" height="126" style="
                                        width:126px !important;  height:126px !important;">
									</div>
									<div class="review-content">
										<div class="review-conent-top">
											<h4 class="fs-20" >
                                                {{review.user.name}}

                                            </h4>

											<div class="reply-rating">



												<review :rating="review.rating"></review>

											</div>
										</div>
										<p>{{review.content}}</p>
										<span v-if="review_added_at">{{review_added_at}}</span>
									</div>
                                    <hr>
								</div>
							</div>
                            	<div class="review-add" v-if="active1==true">

								<div class="review-add-main"  >


						<div class="properties-s-widget page-center mt-3 mr-3 ml-3">
										
                        <div class="timeline-item">
							
                          <h5 class="timeline-header"><a >{{$t('Achievement_License')}} </a> </h5>

                          <div class="timeline-body">
                           <a :href="user.companyfile.path" class="btn btn-primary btn-sm" target="_blank">{{$t('view')}}</a>
                          </div>
                          <div class="timeline-footer">
                           
                          </div>
                        </div>
						</div>


                 
                      
						

			<div class=" properties-s-widget page-center mt-3  mr-3 ml-3">
                        <div class="timeline-item">
						
                          <h5 class="timeline-header text-success"><a href="#">{{$t('Business_license')}} </a> </h5>

                          <div class="timeline-body">
                          
							 <a :href="user.achivement_file.path" class="btn btn-success btn-sm" target="_blank">{{$t('view')}}</a>
                          </div>
                          <div class="timeline-footer">
                           

                          </div>
                        </div>
						</div>

						<div class=" properties-s-widget page-center mt-3  mr-3 ml-3">
							
									<div>
																<span class="badge badge-dark text-light"> 	
{{user.achivement_file.AchiveSinceCreate}}</span>
										{{$t('Achievement_number_since_inception')}}
									</div>

						

<div><span class="badge badge-dark text-light"> 
{{user.achivement_file.AchiveThreeYears}}</span>{{$t('Number_of_achievements_in_the_last_three_years')}}  </div>
						</div>

					

				


                      



                                    <hr>
								</div>
							</div>


						</div>

					</div>
 


	<!-- Blog Area -->
	<span v-if="type!='consulting'">
				  <a class="mr-3"  @click="switchServicdes(1)" :class="{'theme-color font-weight-bolde':TypeService=='1'}">
				  {{$t('services')}}  </a>
 <a class="mr-3" :class="{'theme-color font-weight-bold':TypeService=='2'}" @click="switchServicdes(2)">  {{$t('business_fair')}} </a>

	<section class="blog-area section-padding"  v-if="TypeService==1">
		<div class="container">
			
			<div class="row">
				
				<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
					
					<div class="section-title">
						
						<span class="sub-heading">{{$t('services')}}</span>
						<h2 class="heading-title">{{$t('Latest_ads_added')}}</h2>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-12"   v-for="ads , index in user.service_ads" :key="index" >
					<div class="blog-slider" data-aos="fade-up" data-aos-delay="200">
						<!-- Single Blog -->
						<div class="single-blog">
							<div class="blog-img">
								<span v-for="image , i in ads.image" :key="i">
					<img  :src="image.path" alt="Card image cap" v-if="i==0"
				>
				</span>
							</div>
							<div class="blog-content">
								<div class="blog-meta">
									<!-- <a href="#"><i class="fa fa-calendar-alt"></i>05 Jan,2021</a> -->
									<a href="#"><i class="fa fa-tag"></i>{{ads.title}}</a>
								</div>
								<p class="blog-title fs-18">
									<router-link :to="{name:'CompanyAdsDetails',params:{type:type,id:ads.id}}">
									
									{{ads.description.substr(0,90 )}}...
									</router-link>
									</p>
						
							</div>
						</div>
						<!-- Single Blog -->
					
					
					</div>
				</div>
			</div>
		</div>
	</section>

		<section class="blog-area section-padding"  v-if="TypeService==2">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
					<div class="section-title">
						<span class="sub-heading">{{$t('business_fair')}}</span>
						<h2 class="heading-title">{{$t('Latest_ads_added')}} </h2>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-12" v-for="ads , index in user.works" :key="index" 
		v-bind="ads">
					<div class="blog-slider" data-aos="fade-up" data-aos-delay="200">
						<!-- Single Blog -->
						<div class="single-blog">
							<div class="blog-img">
					<span v-for="image , i in ads.image" :key="i">
					<img  :src="image.path" alt="Card image cap" v-if="i==0"
				>
				</span>
							</div>
							<div class="blog-content">
								<div class="blog-meta">
									<!-- <a href="#"><i class="fa fa-calendar-alt"></i>05 Jan,2021</a> -->
									<a href="#"><i class="fa fa-tag"></i>{{ads.title}}</a>
								</div>
								<p class="blog-title fs-18">
									<router-link :to="{name:'CompanyAdsDetails',params:{type:type,id:ads.id}}">
									
									{{ads.description.substr(0,90 )}}...
									</router-link>
									</p>
						
							</div>
						</div>
						<!-- Single Blog -->
					
					
					</div>
				</div>
			</div>
		</div>
	</section>
	</span>
	<!-- End Blog Area -->



<div v-else class="row">

  
      <div class="single-p-slider col-md-4" v-for="offer , index in user.villa " :key="index">
<div class="single-recent-property">
								<div class="single-r-property-top">
									<!-- Recent Property Img -->
									<div class="single-r-property-img" v-for="image , i in offer.villa_image" :key="i">
										<img :src="image.path" alt="#" v-if="i==0" class="image_villa">
									</div>
									<div class="property-for-sale">
										<ul class="list-none">
											<li><a >{{offer.type_villa==1 ? $t('classic')  : $t('modern')}}</a></li>
											<li class="unique "  ><a href="#" >{{$t('unique')}}</a></li>
										</ul>
									</div>
									<!-- Property Ratting -->
									<div class="property-ratting">
										<div class="property-ratting-left visible-xs">
											<span class="p-ratting-point">4.5</span>
											<div class="p-ratting-details">
												<ul class="ratting-details-star list-none">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star-half-alt"></i></li>
												</ul>
												// <span>2 Comment</span>
											</div>
										</div>
										<!-- <div class="property-ratting-save" v-if="offer.saved_villa==null">
											<a @click="saved(offer.id)" ><i class="fa fa-heart"></i><b class="visible-xs">Save</b></a>
										</div>
                                        <div class="property-ratting-save saved" v-else>
											<a @click="undosaved(offer.id)" class="theme-color"><i class="fa fa-heart"></i><b class="visible-xs">
												Saveed</b></a>
										</div> -->
									</div>
								</div>
								<!-- Single Recent Content -->
								<div class="s-property-content">
									<h3 class="srp-title hs-4"><router-link :to="{name:'pageDetails',params:{id:offer.id}}">{{offer.title}}</router-link></h3>
									<p class="property-location mb-0"><i class="fa fa-map-marker-alt"></i>
                                    <all-uae :emirates="offer.Emirates"></all-uae></p>
									<div class="single-r-property-bed">
										<ul class="single-bed-property list-none">
											<li>
                                                <a @click="Singlefillter('room',offer.type_villa)">
                                                <b>{{offer.rooms}}</b>
                                                <span><i class="bx bxs-bed"></i></span>
                                                </a>
                                                 </li>
											<li><a @click="Singlefillter('bath',offer.bathroom)"><b>{{offer.bathroom}}</b>
                                            <span><i class="bx bxs-bath"></i></span>
                                            </a>
                                            </li>
											<span class="visible-xs">
											<li class="visible-xs"><b>
												{{offer.tab}}</b><span><i class="fas fa-arrows-alt"></i></span></li>
											</span>
										</ul>
									</div>
									<!-- Property User -->
									<div class="property-user" >
										<div class="property-user-left visible-xs">
											<img :src="user.avatar" alt="#" class="rounded-circle visible-xs	" width="40" height="40">
											<div class="property-user-title">
												<p class="at-title mb-0 hs-6"><a href="#">{{user.name}}</a></p>
												<span>company</span>
											</div>
										</div>
										<div class="property-user-price">
											<small><p>{{offer.price}}</p></small>
										</div>
									</div>
								</div>
							</div>
                    </div>
</div>



</div>

    </section>
</div>
	<!-- End Agent Detail Area  -->
</div>
</template>

<script>
import review from '../dashboard/review.vue'
import AllUae from './AllUae.vue'
export default {
  components: { review, AllUae },
data(){
    return{

        type: this.$route.params.type,
        id: this.$route.params.id,
        company:null,
        active1:true,
        active2:false,
        active3:false,
		TypeService:1,
    }
},
watch:{
    mountType(){
this.type=this.$route.params.type
    }
},
	  
methods:{
	switchServicdes(e){
		this.TypeService=e
	},
    tabs(event){
        if(event==1){
            this.active1=true
             this.active2=false
             this.active3=false
        }

         if(event==2){
            this.active1=false
             this.active2=true
             this.active3=false
        }
         if(event==3){
            this.active1=false
             this.active2=false
             this.active3=true
        }

    },

    getCompany(){
        axios.get(`getTypeCompany/${this.id}/${this.type}`).then(res=>{
            this.company=res.data;
        })
    },
},
    created() {
        this.getCompany();
    },
}
</script>

<style>
.card-img-top
{
    width: 300px !important;
    height: 250px !important;

}
.agent-d-img img{
	width: 469px !important; 
	height:  500px !important;
}
</style>
