import {store} from '../store'

export default (to, from, next) => {
    if (store.getters.user) {
        console.log('user')
        next()
    }else{
        console.log('no user')
        next('admin/login')
    }
}