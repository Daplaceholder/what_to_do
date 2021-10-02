<template>
    <div class="mainBody">
        <h2>welcome to the site</h2>
        <div class="menu">
            <a href="/ships/">Ships</a>
            <a href="/crew/">Crew</a>
            <a href="/routes/">Routes</a>
            <a href="/works/">Works</a>
            <a href="/duty/">Duty</a>
        </div>
           <ships
           v-if="isShip"
           />
           <crew
           v-if="isCrew"
           />
           <routes
           v-if="isRoutes"
           />
           <works 
           v-if="isWorks"
           />
           <duty
           v-if="isDuty"
           />
    </div>
</template>

<script >

import Vue from 'vue'
import ships from "./ships.vue" 
import crew from "./crew.vue" 
import routes from "./routes.vue" 
import works from "./works.vue" 
import duty from "./duty.vue" 
export default ({
    components:{
        ships,
        crew,
        routes,
        works,
        duty,
    },
    computed: {
        isShip() {
            if (window.location.pathname =='/ships/'){
                return true;
            }
            
        },
        isCrew() {
            if (window.location.pathname =='/crew/'){
                return true;
            }
            
        },
        isRoutes() {
            if (window.location.pathname =='/routes/'){
                return true;
            }
            
        },
        isWorks() {
            if (window.location.pathname =='/works/'){
                return true;
            }
            
        },
        isDuty() {
            if (window.location.pathname =='/duty/'){
                return true;
            }
            
        },
    }
})

</script>
<style scoped>
.mainBody{
text-align: center;
}
.menu{
width: 450px;
display: flex;
flex-direction: row;
justify-content: space-evenly;
margin-left: auto;
margin-right: auto;
padding: 0 0 50px 0;

}
</style>