import MainLayout from "@/components/layouts/MainLayout";
import Adopt from "@/pages/Adopt/Adopt";

const AdoptRouter = [
    {
        path: '/adopt',
        Component: MainLayout,
        children: [
            {
                index: true,
                Component: Adopt
            }
        ]
    }
]

export default AdoptRouter