import './App.css'
import { RouterProvider } from 'react-router'
import router from './routes/router'
import { QueryClient } from '@tanstack/react-query'
import { Toaster } from './components/ui/sonner'

export const queryClient = new QueryClient()

function App() {
return (
    <>
      <RouterProvider router={router} />
      <Toaster position="bottom-center" richColors />
    </>
  )
}
export default App
