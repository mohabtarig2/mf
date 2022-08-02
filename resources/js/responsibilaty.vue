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
								{{$t('Evacuation_responsibilaty')}}
                               
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
           {{$t('Evacuation_responsibilaty')}}
        </h1>
        <p>
            {{$t('Content_Evacuation_responsibilaty')}}
        </p>


        
        
        <h3 class="mt-3">{{$t('intellectual_property_rights')}}</h3>
        <p class="mt-3">
            {{$t('Content_intellectual_property_rights')}}
        </p>

    

	
	

    </div>

	
    </div>
</div>
</template>

<script>

    export default{

    }

</script>