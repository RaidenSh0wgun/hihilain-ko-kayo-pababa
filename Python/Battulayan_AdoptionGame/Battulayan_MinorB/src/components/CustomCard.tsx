import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "./ui/card";
import type { JSX } from "react";

function CustomCard({ title, description, children, cl }: { title?: string | null, description?: string | null, children?: JSX.Element, cl?: string }) {
    return (
        <Card className={`min-w-160 p-5 py-8 rounded-2xl bg-red-100/90 border-solid border-1 border-black-300 outline-black-200 shadow-[4px_4px_0_0_#a855f7] ${cl}`}>
            <CardHeader>
                <CardTitle className="text-rose-900">
                    {title}
                </CardTitle>
                <CardDescription className="text-black-700">
                    {description}
                </CardDescription>
            </CardHeader>
            <CardContent>
                {children}
            </CardContent>
        </Card>
    )
}

export default CustomCard