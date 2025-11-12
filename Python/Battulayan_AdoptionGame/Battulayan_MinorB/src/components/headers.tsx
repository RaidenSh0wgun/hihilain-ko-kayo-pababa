export function HeaderOne({cl, text}:{cl?:string|null, text: string|null}){
    return <h1 className={`tracking-[1px] text-4xl text-purple-900 font-bold font-sans bg-gradient-to-r from-violet-300 via-violet-300 to-violet-300 p-5 rounded-2xl border-4 border-violet-500 shadow-[0_8px_24px_rgba(124,58,237,0.6)] ${cl}`}>{text}</h1>
}
