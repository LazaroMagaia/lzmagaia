<template>
    <div>
        <h1>Olá! Conte-me <br>tudo</h1>

        <form @submit.prevent="validateForm">
            <p class="title-contacto-interessado">Estou interessado em...</p>
            <div class="option-dev">
                <input type="checkbox" id="webdev" value="web dev" v-model="interested">
                <label for="webdev">Densenvolvimento web</label>

                <input type="checkbox" id="blog" value="blog" v-model="interested">
                <label for="blog">Blog</label>

                <input type="checkbox" id="seo" value="seo" v-model="interested">
                <label for="seo">Seo</label>
            </div>
            
            <div class="form-dev">
                <input type="text" placeholder="Nome" v-model="name" request/>
                <span id="span-email" class="text-danger" style="font-size: 1.8rem;">
                    {{errors.error_name_message}}
                </span>
                <input type="email" placeholder="Email" v-model="email" request/>
                <span id="span-email" class="text-danger" style="font-size: 1.8rem;">
                            {{errors.error_email_message}}
                </span>
                <editor
                    api-key="mxn0ww1hngu4x5rout14iqkeoqkeplxar1yrz6yni0fwtaaq" v-model="message"
                    :init="{
                        height: 500,
                        menubar: false,
                        plugins: [
                        'advlist autolink lists link image charmap print preview anchor',
                        'searchreplace visualblocks code fullscreen',
                        'insertdatetime media table paste code help wordcount'
                        ],
                        toolbar:
                        'undo redo | formatselect | bold italic backcolor | \
                        alignleft aligncenter alignright alignjustify | \
                        bullist numlist outdent indent | removeformat | help'
                    }"/>
                <button type="submit" :disabled="buttonDisabled">
                    <p v-if="buttonDisabled">Enviando</p>
                    <p v-if="!buttonDisabled">Enviar</p>
                </button>
            </div>

        </form>
    </div>
</template>
<script>
    import {baseDir} from "../../helpers";
    import Swal from 'sweetalert2';
    import Editor from '@tinymce/tinymce-vue';
    export default{
        data(){
            return{
                interested: [],
                name:"",
                email:"",
                message:"",
                buttonDisabled:false,
                errors:{
                error_name_span:false,
                error_name_message:"",
                error_email_span:false,
                error_email_message:"",
                }
            }
        },
        components:{
            'editor': Editor
        },
        methods:{
            validateForm(){
            if(!this.name || this.name == "")
            {
                this.errors.error_name_span = true;
                this.errors.error_name_message="Introduza um nome valido";
            }else if(this.name.length < 3 )
            {
                this.errors.error_name_span = true;
                this.errors.error_name_message="O nome de ter no minimo 3 caracteres";
            }else if(this.name.length > 40 )
            {
                this.errors.error_name_span = true;
                this.errors.error_name_message="O nome de ter no maximo 40 caracteres";
            }else
            {
                this.errors.error_name_span = false;
                this.errors.error_name_message="";
            }

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
            
                if( this.errors.error_name_span == false &&
                    this.errors.error_email_span == false )
                {
                    this.sendEmail();
                }
            },
           async sendEmail()
            {
                this.buttonDisabled=true;
                const data ={
                name:this.name,
                email:this.email,
                interested:this.interested,
                message:this.message
                }
                await axios.post(`${baseDir}/home/contacto`,data)
                .then(()=>{
                    Swal.fire({
                    title:'CONTACTO',
                    text:'Obrigado por entrar em contacto, responderemos o mais rapído possível',
                    icon:'success',
                    confirmButtonColor: '#0139FF',
                    });  
                    this.name="";
                    this.email="";
                    this.message="";
                })
                .catch((e)=>{
                    Swal.fire({
                    title:'CONTACTO',
                    text:'ERRO!, TENTE MAIS TARDE',
                    icon: 'error',
                    confirmButtonColor: '#0139FF',
                    }) 
                    console.log(e);
                })
                .finally(()=>{
                    this.buttonDisabled = false;
                });
            }
        }
    }

</script>
