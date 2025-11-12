import HomePage from "@/pages/Home/HomePage";
import IntroLayout from '@/components/layouts/IntroLayout'

const GuestRouter = [
    {
        path: '/',
        Component: IntroLayout,
        children: [
            {
                index: true,
                Component: HomePage
            }
        ]
    }
]

export default GuestRouter