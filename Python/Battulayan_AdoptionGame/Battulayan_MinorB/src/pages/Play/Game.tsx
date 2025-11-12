import CustomCard from "@/components/CustomCard";
import { HeaderOne} from "@/components/headers";
import { useEffect, useState } from "react";
import { useNavigate } from "react-router";
import { toast } from "sonner";
import {
    Dialog,
    DialogContent,
    DialogDescription,
    DialogHeader,
    DialogTrigger,
    } from "@/components/ui/dialog"
import { Progress } from "@/components/ui/progress"
import { type PetType } from "@/types/Pets";
import { FOOD_ITEMS, PET_TYPES, isFood , PHRASES, BUTTON_PHRASES} from "@/data/petTypes";

function Game(){
    const navigate = useNavigate()
    const storedPet = localStorage.getItem("pet")
    const pet = storedPet ? JSON.parse(storedPet) : null
    const selectedTypeData = pet ? PET_TYPES.find(p => p.type === (pet.petType as PetType)) : null

    useEffect(() => {
        if (!pet) {
            navigate('/')
        }
    }, [pet, navigate])
    
    const buttonStyle = "w-full rounded-2xl bg-violet-300 p-3 border-violet-800 outline outline-1 outline-violet-300 text-violet-700 shadow-[2px_2px_0_0_#a855f7] hover:shadow-[1px_1px_0_0_#a855f7] hover:translate-x-[1px] hover:translate-y-[1px] transition-all active:shadow-none active:translate-x-[2px] active:translate-y-[2px]"

    const sectionStyle = "bg-violet-80/90 p-4 rounded-2xl flex flex-row justify-between gap-3 border-5 border-rose-200 outline outline-2 outline-rose-300 shadow-[4px_4px_0_0_#a855f7]"

    const [hungerValue, setHungerValue]= useState(50)
    const [energyValue, setEnergyValue] = useState(50)
    const [happyValue, setHappyValue] = useState(100)
    const [dialog, setDialog] = useState(false)
    const [monologue, setMonologue] = useState("")
    const [status, setStatus] = useState("normal")

    if (energyValue > 100) {
        setEnergyValue(100)
    }
    if (happyValue > 100) {
        setHappyValue(100)
    }

    useEffect(()=> {
        if((hungerValue > 20) && (energyValue > 20) && (happyValue > 20)) {
            setStatus("normal")
            if (hungerValue > 80) {
                setStatus("bloated")
            }
            else if(((hungerValue > 50) && (hungerValue < 100)) && (energyValue > 50) && (happyValue > 50)) {
                setStatus("great")
            }
        }
        else if ((hungerValue < 50) && (hungerValue < energyValue) && (happyValue > 10)) {
            setStatus("hungry")
        }
        else if ((energyValue < 20) && (energyValue < hungerValue)) {
            setStatus("tired")
        }
        else if ((happyValue < 20) && ((energyValue > 0) || (hungerValue > 0))) {
            setStatus("depressed")
        }
    }, [hungerValue, energyValue, happyValue])

    const handleTalkClick = () => {

        if (status == "normal") {
            const statusPhrases = PHRASES.find(e => e.status === "normal")?.phrases as string[] | undefined
            const randomPhrase = statusPhrases?.[Math.floor(Math.random() * statusPhrases.length)]
            setMonologue(randomPhrase || "Hi")
        } 
        else if (status == "tired") {
            const statusPhrases = PHRASES.find(e => e.status === "tired")?.phrases as string[] | undefined
            const randomPhrase = statusPhrases?.[Math.floor(Math.random() * statusPhrases.length)]
            setMonologue(randomPhrase || "Sleepy")
        }
        else if (status == "hungry") {
            const statusPhrases = PHRASES.find(e => e.status === "hungry")?.phrases as string[] | undefined
            const randomPhrase = statusPhrases?.[Math.floor(Math.random() * statusPhrases.length)]
            setMonologue(randomPhrase || "I could eat anything rn")
        }
        else if (status == "depressed") {
            const statusPhrases = PHRASES.find(e => e.status === "depressed")?.phrases as string[] | undefined
            const randomPhrase = statusPhrases?.[Math.floor(Math.random() * statusPhrases.length)]
            setMonologue(randomPhrase || ":<")
        }
        else if (status == "bloated") {
            const statusPhrases = PHRASES.find(e => e.status === "bloated")?.phrases as string[] | undefined
            const randomPhrase = statusPhrases?.[Math.floor(Math.random() * statusPhrases.length)]
            setMonologue(randomPhrase || "Im so full")
        }
        else if (status == "great") {
            const statusPhrases = PHRASES.find(e => e.status === "great")?.phrases as string[] | undefined
            const randomPhrase = statusPhrases?.[Math.floor(Math.random() * statusPhrases.length)]
            setMonologue(randomPhrase || "Hehe")
        }
    }
    const handlePlayClick = () => {
        setEnergyValue(prev => prev - 100 * 0.25)
        setHungerValue(prev => prev - 100 * 0.20)
        
        const likesPlaying = selectedTypeData?.likes.some(like => like === 'playing')
        const dislikesPlaying = selectedTypeData?.dislikes.some(dislike => dislike === 'playing')
        
        const playPhrases = BUTTON_PHRASES.find(e => e.activity === 'play')?.phrases
        
        if (likesPlaying) {
            setHappyValue(prev => prev + 100 * 0.25)
            const likedPhrases = (playPhrases as any)?.[0]?.liked || []
            const randomPhrase = likedPhrases[Math.floor(Math.random() * likedPhrases.length)]
            setMonologue(randomPhrase || "Let's do it again!")
        } 
        else if (dislikesPlaying) {
            setHappyValue(prev => prev - 100 * 0.25)
            const hatedPhrases = (playPhrases as any)?.[1]?.hated || []
            const randomPhrase = hatedPhrases[Math.floor(Math.random() * hatedPhrases.length)]
            setMonologue(randomPhrase || "Ehhh, not fun.")
        }
    }
    const handleSleepClick = () => {
        setHungerValue(prev => prev - 100 * 0.20)
        setEnergyValue(prev => prev + 100 * 0.25)

        const likesSleeping = selectedTypeData?.likes.some(like => like === 'sleeping') 
        const dislikesSleeping = selectedTypeData?.dislikes.some(dislike => dislike === "sleeping")
        
        if (likesSleeping) {
            setHappyValue(prev => prev + 100 * 0.25)
        }
        else if (dislikesSleeping){
            setHappyValue(prev => prev - 100 * 0.25)
        }
        
        const sleepPhrases = BUTTON_PHRASES.find(e => e.activity === 'sleep')?.phrases as string[] | undefined

        const randomPhrase = sleepPhrases?.[Math.floor(Math.random() * sleepPhrases.length)]

        setMonologue(randomPhrase || "zzzzz")
    }

    const handleFoodSelect = (foodType: string) => {
        setDialog(false)

        const likesThis = selectedTypeData?.likes.some(like => like === foodType)
        const hatesThis = selectedTypeData?.dislikes.some(dislike => dislike === foodType)

        const eatPhrases = BUTTON_PHRASES.find(e => e.activity === 'eat')?.phrases

        if (likesThis) {
            setHappyValue(prev => prev + 100 * 0.25)
            setHungerValue(prev => prev + 100 * 0.20)
            setEnergyValue(prev => prev + 100 * 0.15)
            const likedPhrases = (eatPhrases as any)?.[0]?.liked || []
            const randomPhrase = likedPhrases[Math.floor(Math.random() * likedPhrases.length)]
            setMonologue(randomPhrase)
        }
        else if (hatesThis){
            setHappyValue(prev => prev - 100 * 0.25)
            setHungerValue(prev => prev + 100 * 0.02)
            setEnergyValue(prev => prev + 100 * 0.05)
            const hatedPhrases = (eatPhrases as any)?.[1]?.hated || []
            const randomPhrase = hatedPhrases[Math.floor(Math.random() * hatedPhrases.length)]
            setMonologue(randomPhrase)
        }
        else {
            setHungerValue(prev => prev + 100 * 0.10)
            setEnergyValue(prev => prev + 100 * 0.10)
            setMonologue("Yummy")       
        }
    }
    if ((energyValue < 0) || (hungerValue == 0 || hungerValue < 0 || hungerValue > 100) || (happyValue < 0)){
        localStorage.clear()
        toast.warning ("Your failed to take care of your pet. It died", {position: "bottom-center"})
        navigate('/')
    }

    return (
        <>
        <HeaderOne cl='font-bold' text={`${pet?.petName} the ${pet?.petType}`}/>
        <CustomCard title={`status: ${status}`} description="" cl="mt-10 flex flex-col gap-5">
            <>
            <div className="flex flex-col gap-4 relative">
                <div className="absolute left-4 top-2 z-40 px-3 py-1 rounded-xl bg-violet-200/95 text-violet-900 font-semibold text-sm border-2 border-violet-300 shadow-[2px_2px_0_0_#a855f7] backdrop-blur-sm">
                    {pet?.petName}
                </div>
                <div className={sectionStyle}>
                    <div className="flex flex-col">
                        <div className="w-[150px] h-[150px] p-2 rounded-xl border-solid border-1 border-violet-300 bg-rose/70 outline outline-1 outline-violet-200 shadow-[2px_2px_0_0_#a855f7] flex items-center justify-center">
                            {selectedTypeData?.image && (
                                <img src={selectedTypeData?.image} alt={selectedTypeData.displayName} className="max-w-full max-h-full object-contain" />
                            )}
                        </div>
                    </div>
                    <div className="w-[300px] bg-rose/80 p-4 rounded-xl border-1 border-violet-300 outline outline-1 outline-violet-200 text-violet-900">
                        {pet?.petName}: {monologue}
                    </div>
                </div>
                <div className={sectionStyle}>
                    <button
                        className={buttonStyle}
                        onClick={handleTalkClick}>
                        Talk
                    </button>
                    <Dialog open={dialog} onOpenChange={setDialog}>
                        <form className="w-full ">
                            <DialogTrigger asChild>
                                <button className={buttonStyle}>Eat</button>
                            </DialogTrigger>
                            <DialogContent className="sm:min-w-[200px] bg-violet-900/10 text-blue-900">
                                <DialogHeader>
                                    <DialogDescription className="text-blue-900 font-normal flex flex-row gap-10">
                                    <div>
                                    <p className="font-bold mb-2">{pet?.petName} likes:</p>
                                    {selectedTypeData?.likes
                                        .filter(like => isFood(like))
                                        .map((like) => {
                                            const foodItem = FOOD_ITEMS.find(item => item.type === like);
                                            return (
                                                <p key={like} className="flex items-center gap-2">
                                                    {foodItem?.name || like}
                                                </p>
                                            );
                                        })}
                                    </div>
                                    <div>
                                    <p className="font-bold mb-2">{pet?.petName} hates:</p>
                                    {selectedTypeData?.dislikes
                                        .filter(dislike => isFood(dislike))
                                        .map((dislike) => {
                                            const foodItem = FOOD_ITEMS.find(item => item.type === dislike);
                                            return (
                                                <p key={dislike} className="flex items-center gap-2">
                                                    {foodItem?.name || dislike}
                                                </p>
                                            );
                                        })}
                                    </div>
                                    </DialogDescription>
                                </DialogHeader>
                                {FOOD_ITEMS?.map(item => (
                                    <button key={item.type} className="flex items-center gap-2 p-1.5 hover:bg-rose-200/50 rounded-lg" onClick={() => handleFoodSelect(item.type)}>
                                        <span className="w-[50px]"><img src={item.image} alt={item.name} /></span> {item.name}
                                    </button>
                                ))}
                            </DialogContent>
                        </form>
                    </Dialog>
                    <button
                        className={buttonStyle}
                        onClick={handlePlayClick}>
                        Play
                    </button>
                    <button
                        className={buttonStyle}
                        onClick={handleSleepClick}>
                        Sleep
                    </button>
                </div>
                <div className="bg-rose/80 p-4 rounded-2xl flex flex-col justify-between gap-3 border-1 border-violet-300 outline outline-1 outline-violet-200 shadow-[2px_2px_0_0_#a855f7]">
                <div className="font-bold text-rose-900">Hunger Bar</div>
                <Progress value={hungerValue} />
                <div className="font-bold text-rose-900">Energy Bar</div>
                <Progress value={energyValue} />
                <div className="font-bold text-rose-900">Happiness</div>
                <Progress value={happyValue} />
                </div>
            </div>
            </>
        </CustomCard>
    </>
    )
}

export default Game