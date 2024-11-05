import { createRouter,createWebHistory }  from "vue-router";

import invoiceIndex from '../components/invoices/index.vue'
import invoiceNew from '../components/invoices/new.vue'
import NotFound from "../components/notfound.vue"




const routes=[
    {
        path:'/',
        component:invoiceIndex
    },
    {
        path:'/invoice/new',
        component:invoiceNew

    },
    {
        path:'/:pathMatch(.*)*',
        component:NotFound
    }
]

const router =createRouter({
    history:createWebHistory(),
    routes
})

export default router