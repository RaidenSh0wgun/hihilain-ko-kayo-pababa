import {
  Card,
  CardHeader,
  CardTitle,
  CardContent,
  CardDescription,
} from '@/components/ui/card'
import { Button } from '@/components/ui/button'
import { useNavigate } from 'react-router'
import { HeaderOne } from '@/components/headers'

function HomePage() {

  const navigate = useNavigate()

  const adopt = () => {
    navigate('/adopt')
  }
  const play = () => {
    navigate('/game')
  }

  const storedPet = localStorage.getItem("pet")
  const pet = storedPet ? JSON.parse(storedPet) : null

  const buttonStyle = "w-36 rounded-full bg-gradient-to-br from-violet-700 via-violet-600 to-violet-500 p-3 text-white font-semibold shadow-[4px_4px_0_0_rgba(124,58,237,0.5)] border-2 border-violet-400 disabled:opacity-50 disabled:pointer-events-none hover:scale-[1.02] hover:shadow-[6px_6px_0_0_rgba(124,58,237,0.6)] active:scale-95 active:shadow-[2px_2px_0_0_rgba(124,58,237,0.4)] transition-all"
  
  return (
    <>
      <HeaderOne cl='bg-violet-300/90 border-violet-400' text='Pet Adopting game ;-;'></HeaderOne>
      <Card className='rounded-3xl mt-10 min-w-150 py-8 bg-gradient-to-br from-violet-200 to-violet-100 p-5 border-4 border-violet-400 shadow-[12px_12px_0_0_rgba(124,58,237,0.4)]'>
        <CardHeader>
          
          <CardTitle className='flex place-content-center text-violet-900 text-2xl font-bold'>
            Take care of your pet!
          </CardTitle>
          <CardDescription className='flex place-content-center text-violet-700 text-lg'>
            {pet ? 'Pet has been adopted you can now play the game' : 'Adopt a pet to start playing'}
          </CardDescription>
        </CardHeader>
        <CardContent>
          <div className='flex flex-row gap-4 items-center justify-between w-full max-w-[420px] mx-auto bg-violet-100/50 p-6 rounded-2xl shadow-inner border border-violet-300'>
            <div className='flex-1 flex justify-start'>
              <Button className={buttonStyle} onClick={adopt} type='button' disabled={pet}>
                Adopt
              </Button>
            </div>
            <div className='flex-1 flex justify-end'>
              <Button className={buttonStyle} onClick={play} type='button' disabled={!pet}>
                Play
              </Button>
            </div>
          </div>
        </CardContent>
      </Card>
    </>
  )
}

export default HomePage


