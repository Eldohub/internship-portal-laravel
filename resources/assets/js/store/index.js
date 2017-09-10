import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export const store = new Vuex.Store({
    state: {
        drawer: true
    },
    mutations: {
        setDrawer (state, payload) {
            state.drawer = payload
        }
    },
    actions: {
        changeDrawer ({commit}, payload) {
            const drawer = !payload
            commit('setDrawer', drawer)
        }
    },
    getters: {
        getDrawer (state) {
            return state.drawer
        }
    }
});