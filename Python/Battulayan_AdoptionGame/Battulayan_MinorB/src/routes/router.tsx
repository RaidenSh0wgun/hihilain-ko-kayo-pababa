import { createBrowserRouter, type RouteObject } from 'react-router';
import GuestRouter from './GuestRouter';
import AdoptRouter from './AdoptRouter';
import GameRouter from './GameRouter';

const router = createBrowserRouter([...GuestRouter, ...AdoptRouter, ...GameRouter] as RouteObject[])

export default router