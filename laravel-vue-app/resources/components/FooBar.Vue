<template>
  <!-- 略 --> 
</template>

<script>
  export default {
    props: {
      propSamplePrice: {
        type: Number,
      },
      endpoint: {
        type: String,
      },
    },
    methods: {
      async sampleUpdate() {
        const response = await axios.put(this.endpoint)
        // 略
      },
    },  
</script>