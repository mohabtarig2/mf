<template>
    <div class="mt-3" :dir="$t('direactions')" :class="$t('text_align')">
        

            <h3 class="h5 mt-4 font-weight-bold theme-color">  {{$t('build_by')}} </h3>
            <small class=" text-primary">
        <i class="fas fa-check-circle"></i>
            
 

     
            <span class="mr-2" v-if="typeBuild==1">  {{$t('Loan')}}</span>
   

           
            <span class="mr-2" v-if="typeBuild==2">  {{$t('Grant')}}</span>
     
    
   
           
    </small>
<div v-if="priceGrant">
    <h3 class="h5 mt-4 font-weight-bold theme-color">  {{$t('Mention_the_loan_amount')}} </h3>

    {{priceGrant}}
</div>
            <h3 class="h5 mt-4 font-weight-bold theme-color"> {{$t('Grant_Provider')}} </h3>
    <small class=" text-primary">
        <i class="fas fa-check-circle"></i>
            <span class="" v-if="Provider==1">{{$t('Sheikh_Zayed_Housing_Program')}}</span>
 

     
            <span class="mr-4 ml-4" v-if="Provider==2">{{$t('Sheikh_Mohammed_bin_Rashid_Housing_Program')}}</span>
   

           
            <span class="mr-4 ml-4" v-if="Provider==3">  {{$t('AbuDhabi_Housing_Program')}}</span>
     
    
   
            <span class="mr-4 ml-4" v-if="Provider==4">{{$t('Sharjah_Housing_Program')}}</span>
    

        <span class="mr-4 ml-4" v-if="Provider==5">{{$t('Sharjah_Esnad_Housing_Program')}}</span>

            <span class="mr-4 ml-4" v-if="Provider==6">{{$t('Diwan')}}
</span>
    </small>
<div v-if="BankProvider">
    <h3 class="h5 mt-4 font-weight-bold theme-color">   {{$t('Grant_Funding_Bank')}} </h3>

    {{BankProvider}}
</div>

<div v-if="finance">
    <h3 class="h5 mt-4 font-weight-bold theme-color"> {{$t('Approximate_added_amount_Financing_method')}} </h3>

    {{finance}}
</div>


    </div>
</template>

<script>
export default {
    props:{Provider:Number,typeBuild:Number,priceGrant:String,BankProvider:String,finance:String}

    
}
</script>