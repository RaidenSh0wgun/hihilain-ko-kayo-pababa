export type PetType =
  | 'Doggy'
  | 'Mori'
  | 'Squash'
  | 'Spider';

export type FoodType = 'Cake' | 'carrot' | 'cookie' | 'Noob' | 'Zombie';

export type Activity = 'playing' | 'sleeping' | 'run' | 'talk';

export type LikeDislike = FoodType | Activity;

export interface Pet {
  id: string;
  type: PetType;
  name: string;
  likes: FoodType[];
  dislikes: FoodType[];
  hunger: number;
  happiness: number;
  energy: number;
  image?: string;
}

export interface PetTypeData {
  type: PetType;
  displayName: string;
  likes: LikeDislike[];
  dislikes: LikeDislike[];
  image: string;
}