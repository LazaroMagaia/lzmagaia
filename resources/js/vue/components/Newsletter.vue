
<template>
    <form @submit.prevent="validateForm">
        <div class="d-flex justify-content-center text-center flex-wrap">
            <input type="text" name="" id="" placeholder="Seu melhor email" v-model="email">
            <button class="" type="submit" :disabled="buttonDisabled">
                inscrever-me
            </button>
        </div>
    </form>
</template>

<script>
    import Swal from 'sweetalert2';
    export default{
        data()
        {
            return{
                email:"",
                buttonDisabled:false,
                errors:{
                error_email_span:false,
                error_email_message:"",
                }
            }
        },
        methods: {
            validateForm(){
                if(this.email== "")
                {
                    this.errors.error_email_span= true;
                    this.errors.error_email_message="Introduza um email valido";
                }else if(this.email.indexOf("@") == -1  || this.email.indexOf(".") == -1 || 
                        (this.email.indexOf("@") - this.email.indexOf(".") == 1 )){
                    this.error_email_span= true;
                    this.error_email_message="Introduza um email valido";
                }else
                {
                    this.errors.error_email_span= false;
                    this.errors.error_email_message="";
                }
                Swal.fire({
                    title:'NEWSLETTER',
                    text:'Vai ter algo incrivel aqui',
                    icon:'success',
                    confirmButtonColor: '#0139FF',
                    });  
            }
           
        },
    }
</script>