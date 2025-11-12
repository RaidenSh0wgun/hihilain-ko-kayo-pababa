import MainLayout from "@/components/layouts/MainLayout";
import Game from "@/pages/Play/Game";

const GameRouter = [
    {
        path: '/game',
        Component: MainLayout,
        children: [
            {
                index: true,
                Component: Game
            }
        ]
    }
]

export default GameRouter