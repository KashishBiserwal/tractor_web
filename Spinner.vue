<template>
    <div class="spinner">
    </div>
</template>

<script>
    export default {
        name:'Spinner'
    }
</script>

<style lang="scss" scoped>
.spinner {
  height: 1.2rem;
  width: 1.2rem;
  border-bottom: 0.15rem solid rgb(234, 234, 234);
  border-radius: 50%;
  animation: loadingAnim 0.8s linear infinite;
}
@keyframes loadingAnim {
  to {
    transform: rotateZ(-360deg);
  }
}
</style>