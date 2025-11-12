import CustomCard from "@/components/CustomCard";
import { HeaderOne } from "@/components/headers";
import { useEffect, useState } from "react";
import { useNavigate } from "react-router";
import {
Select,
SelectContent,
SelectItem,
SelectTrigger,
SelectValue,
} from "@/components/ui/select"
import { SelectGroup } from "@radix-ui/react-select"
import { Input } from '@/components/ui/input'
import { toast } from "sonner";
import { PET_TYPES } from "@/data/petTypes";
import type { PetType } from "@/types/Pets";

function Adopt() {
    const storedPet = localStorage.getItem("pet")
    const pet = storedPet ? JSON.parse(storedPet) : null
    const [petName, setPetname] = useState("");
    const [petType, setPetType] = useState<PetType | "">("");

    const navigate = useNavigate()
    const back = () => {
        localStorage.clear()
        navigate("/")
    }

    useEffect(() => {
        if (pet) {
            navigate('/')
        }
    }, [pet, navigate])

    const adopt = (getValue: string) => {
    const data  = {
        petName: petName,
        petType: petType,
        value: getValue
    }

    if ((petType) && (petName.length > 10)) {
        toast.warning("Dont make the name too long!")
    }
    else if(petName && petType){
        localStorage.setItem("pet", JSON.stringify(data))
        navigate("/")
        toast.success("Pet adopted!", {position: "bottom-center"})
    }else{
        toast.warning("Please fill up all forms",{position: "bottom-center"})
    }
    }

    const buttonStyle = "w-36 rounded-full bg-gradient-to-br from-violet-700 via-violet-600 to-violet-500 p-3 text-white font-semibold shadow-[4px_4px_0_0_rgba(124,58,237,0.5)] border-2 border-violet-400 disabled:opacity-50 disabled:pointer-events-none hover:scale-[1.02] hover:shadow-[6px_6px_0_0_rgba(124,58,237,0.6)] active:scale-95 active:shadow-[2px_2px_0_0_rgba(124,58,237,0.4)] transition-all"

    const selectedTypeData = PET_TYPES.find(p => p.type === (petType as PetType))

    return (
        <>
            <HeaderOne cl='bg-violet-800 text-purple-500 font-sans border-violet-700 shadow-[0_4px_12px_rgba(124,58,237,0.6)] font-bold' text="Adopt a Pet"/>
                    <CustomCard title="Name your pet" description="" cl="mt-10 flex flex-col gap-3 bg-violet-50/50 border-solid border-4 border-violet-300 outline-none">
                <>
                <div className="flex flex-col gap-5 p-6 bg-gradient-to-br from-violet-200 to-violet-100 border-4 border-violet-400 rounded-3xl shadow-[12px_12px_0_0_rgba(124,58,237,0.4)] font-sans">
                <div className="flex flex-row justify-between gap-4 relative">
                    <div className="flex flex-col gap-3 m-1">
                        <Input placeholder="Input pet name" className="w-[240px] rounded-xl bg-white/90 border-violet-300" value={petName} onChange={(e) => setPetname(e.target.value)} />
                        <Select onValueChange={(v: string) => setPetType(v as PetType)} value={petType}>
                            <SelectTrigger className="w-[240px] rounded-xl border-violet-300 bg-white/90">
                                <SelectValue placeholder="Choose a pet" />
                            </SelectTrigger>
                            <SelectContent className="rounded-none">
                                <SelectGroup>
                                    <SelectItem value='Doggy'>Dog</SelectItem>
                                    <SelectItem value='Mori'>Mori</SelectItem>
                                    <SelectItem value='Spider'>Spider</SelectItem>
                                    <SelectItem value='Squash'>Squash</SelectItem>
                                </SelectGroup>
                            </SelectContent>
                        </Select>
                    </div>
                    {(petType && petName) ? (
                        <div className="absolute right-4 top-2 z-40 px-3 py-1 rounded-full bg-violet-500/95 text-white font-semibold text-sm border-2 border-violet-400 shadow-[4px_4px_0_0_rgba(124,58,237,0.4)] backdrop-blur-sm">
                            <div className="">{petName}</div>
                        </div>
                    ) : null}
                    <div className="w-[150px] h-[150px] p-2 border-4 border-violet-400 bg-white/90 rounded-2xl shadow-[6px_6px_0_0_rgba(124,58,237,0.3)] flex items-center justify-center">
                        {selectedTypeData?.image && (
                            <img 
                                src={selectedTypeData?.image} 
                                alt={selectedTypeData.displayName}
                                className="max-w-full max-h-full object-contain" 
                            />
                        )}
                    </div>
                </div>
                <div>
                    {selectedTypeData ? (
                        <div className="bg-violet-100/90 border-2 border-violet-300 rounded-2xl p-6 m-2 px-4 flex flex-row justify-center gap-8 shadow-[4px_4px_0_0_rgba(124,58,237,0.3)] font-sans">
                            <div className="mx-15">
                                <h1 className="font-bold mb-4 justify-self-center text-violet-900 font-sans">Likes</h1>
                                <div className="flex flex-col gap-1">
                                    {selectedTypeData?.likes.map((like) => (
                                        <p className="bg-violet-200/80 border border-violet-300 rounded-lg p-2 text-violet-800 font-medium">{like}</p>
                                    ))}
                                </div>
                            </div>
                            <div className="mx-15">
                                <h1 className="font-bold mb-4 justify-self-center text-violet-900">Dislikes</h1>
                                <div className="flex flex-col gap-1">
                                    {selectedTypeData?.dislikes.map((dislike) => (
                                        <p className="bg-violet-300/80 border border-violet-400 rounded-lg p-2 text-violet-900 font-medium">{dislike}</p>
                                    ))}
                                </div>
                            </div>
                        </div>
                    ) : null}
                </div>
                </div>
                <div className="flex flex-row gap-7 justify-center mt-6">
                    <button
                        onClick={back}
                        className={buttonStyle}
                    >
                        Go back
                    </button>
                    <button
                        onClick={() => adopt('default')}
                        className={buttonStyle}
                    >
                        Adopt Pet
                    </button>
                </div>
                
                </>
            </CustomCard>
        </>
    )
}

export default Adopt