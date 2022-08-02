<template>
<div>
    			<!-- Breadcrumbs Area -->
	<section class="breadcrumbs-area" style="background-image:url('img/breadcrumbs-bg.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Breadcrumbs Content -->

					<div class="breadcrumbs-content">
						<h1 class="b-content-title m-0 ">
								{{$t('termsConditions')}}
                               
							 </h1>
						<ul class="breadcrumbs-menu list-none">
						
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
    <div class="container">
    <div class="terms  mt-5"  :dir="$t('direactions')" :class="$t('text_align')">
        <h1 class="">
           {{$t('termsConditions')}}
        </h1>
        <p>
            {{$t('ContentTerms')}}
        </p>


        
        
        <h3 class="mt-3">{{$t('whatIsData')}}</h3>
        <p class="mt-3">
            {{$t('AboutWhatIsData')}}
        </p>

		<h3 class="mt-3 ">{{$t('WeUseData')}}</h3>
	<p>{{$t('UseData')}}</p>

		<h3 class="mt-3 ">{{$t('disclose')}}</h3>
	<p>{{$t('ContentDisclose')}}</p>
	<p>{{$t('ContentDisClose2')}}</p>
	<p>{{$t('ContentDisClose3')}}</p>
	<p>{{$t('ContentDisClose4')}}</p>

	<h3 class="mt-3 ">{{$t('HowToStorageData')}}</h3>

	<p>{{$t('StorageData')}}</p>

	<h3 class="mt-3 ">{{$t('ًWhatIsProtiction')}}</h3>

	<p>{{$t('Protiction')}}</p>

		<h3 class="mt-3 ">{{$t('HowAccessAndModify')}}</h3>

	<p>{{$t('AccessAndModify')}}</p>

		<h4 class="mt-3 ">{{$t('WhatAccessAndModifyExample')}}</h4>
	<p>{{$t('AccessAndModifyExamples')}}</p>
	<p>{{$t('AccessAndModifyExamples1')}}</p>


	<h3 class="mt-3 ">{{$t('WhatIfWeChangePrivacy')}}</h3>
	<p>{{$t('WeChnagePrivacy')}}</p>


	<h3 class="mt-3 ">{{$t('How_can_you_contact_us')}}</h3>
	<p>{{$t('you_contact_us')}}</p>

		<h3 class="mt-3 ">{{$t('Change_privacy')}}</h3>
	<p>{{$t('amb_Change_privacy')}}</p>

	
	

    </div>

	
    </div>
</div>
</template>

<script>

    export default{

    }

</script>