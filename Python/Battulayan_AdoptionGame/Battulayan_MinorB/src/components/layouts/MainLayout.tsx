import { Outlet } from "react-router";

function MainLayout() {
    return (
        <main className="w-full">
            <div className="flex flex-col items-center justify-center p-5 h-[100vh]">
                <Outlet />
            </div>
        </main>
    )
}

export default MainLayout