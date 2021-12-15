const Welcome = () => import('./components/welcome')

export const routes = [
    {
        name: 'home',
        path: '/home',
        component: Welcome,
        meta: { title: 'Home' }
    },
]