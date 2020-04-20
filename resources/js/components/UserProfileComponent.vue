<template>
        <form @submit.prevent="profileUpload" method="POST" enctype="multipart/form-data">
            <div class="custom-file">
                <input type="file" @change="imageSelected" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose an image</label>
            </div>
            <div v-if="imagepreview" class="mt-3">
                <img :src="imagepreview" class="figure-img img-fluid rounded"  style="max-height:100px;">
            </div>
            <button class="btn btn-success mt-5" type="submit">Upload profile</button>
        </form>
</template>
<script>
export default {
    data(){
        return{
            image: null,
            imagepreview: null,
        }
    },

    methods:{
        imageSelected(e){
            this.image = e.target.files[0];

            let reader = new FileReader();
            reader.readAsDataURL(this.image);
            reader.onload = e => {
            this.imagepreview = e.target.result;
               };
        },

        profileUpload(){
            let data = new FormData;
            data.append('image', this.image);
            axios.post('../userprofile', data)
            .then(()=>{
                window.location = '../profile';
            }).catch(()=>{

            })
        }
    }
}
</script>