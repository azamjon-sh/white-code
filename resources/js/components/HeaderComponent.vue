<template>
    <header class="header" id="header">
        <div class="container">
        <div class="header__inner">
            <div class="header__left">
                <div class="header__logo">
                    <img src="../../img/logo.svg" alt="">
                </div>
                <div class="header__menu">
                    <a class="header__item" v-for="(item,index) in menu" :key="index" :href="item.link">
                        {{ item.title }}
                    </a>
                </div>
            </div>
            <div class="header__right">
                <div class="header__profile"><img src="../../img/user.svg" alt="">
                </div>
                <div class="header__notification">
                    <img src="../../img/notification.svg" alt="">
                    <span class="count">2</span>
                </div>
                <button class="btn header__btn">Appointment</button>
            </div>
        </div>
        </div>
    </header>
</template>

<script>
export default {
    name: "HeaderComponent",
    data() {
        return {
            menu: [
                {title: "Home", link: "#home"},
                {title: "History", link: "#history"},
                {title: "Service", link: "#service"},
                {title: "Gallery", link: "#gallery"},
            ]
        }
    }
}
</script>

<style scoped>

</style>
