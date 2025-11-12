import type { PetTypeData, Activity, FoodType } from '@/types/Pets';
import Mori from '@/data/pets/Mori meow.png'
import doggy from '@/data/pets/Doggy.jpg'
import Squash from '@/data/pets/Squash.png'
import Spider from '@/data/pets/Roblos despacito spider.png'

import Cake from '@/data/food/Cake_JE4.png'
import Carrot from '@/data/food/Carrot_JE3_BE2.png'
import Roblox from '@/data/food/Noob.png'
import Zombie from '@/data/food/Zombie.png'
import cookie from '@/data/food/cookie.jpg'

export const PET_TYPES: PetTypeData[] = [
  {
    type: 'Mori',
    displayName: 'Cat entity',
    likes: ['carrot', 'Cake', 'sleeping', 'playing'],
    dislikes: ['Zombie', 'cookie'],
    image: Mori
  },
  {
    type: 'Doggy',
    displayName: 'Doge',
    likes: ['Cake', 'Noob', 'playing'],
    dislikes: ['carrot', 'carrot', 'run'],
    image: doggy
  },
  {
    type: 'Squash',
    displayName: 'Floppa the Cat',
    likes: ['Zombie', 'Noob', 'sleeping', 'sleeping'],
    dislikes: ['carrot', 'Cake', 'playing'],
    image: Squash
  },
  {
    type: 'Spider',
    displayName: 'Minion',
    likes: ['Zombie', 'Cake', 'playing', 'run'],
    dislikes: ['cookie', 'carrot'],
    image: Spider
  }
];

export const FOOD_ITEMS = [
  { type: 'cake' as const, name: 'Cake', image: Cake },
  { type: 'carrot' as const, name: 'Carrot', image: Carrot },
  { type: 'roblox' as const, name: 'Roblox', image: Roblox },
  { type: 'zombie' as const, name: 'Zombie', image: Zombie },
  { type: 'Cookie' as const, name: 'Cookie', image: cookie },
];

export const ACTIVITY_ITEMS: Record<Activity, { name: string}> = {
  'playing': { name: 'Playing' },
  'sleeping': { name: 'Sleeping' },
  'run': { name: 'Run' },
  'talk': { name: 'talk' }
};

export const PHRASES = [
  {
    status: "normal",
    phrases: [
      "What's on the agenda today?",
      "Hey — you doing okay out there?",
      "Movie night sounds neat, doesn't it?",
      "Sometimes I nap with one eye open. It's a skill.",
      "Psst — my favorite snack earns extra tail-wags.",
      "Yo. Long time no see...",
      "I notice when you stare. I call it bonding.",
      "These pixels are my playground — life is good.",
      "You see a screen; I see endless levels."
    ]
  },
  {
    status: "hungry",
    phrases: [
      "My tummy's rumbling... feed me, please!",
      "Is it snack time yet? I'm starving!",
      "I could eat a whole buffet right now.",
      "Food, please! My hunger levels are critical.",
      "I'm so hungry, I could chase my tail for food!"
    ]
  },
  {
    status: "Full",
    phrases: [
      "That was delicious! But I couldnt eat another bite.",
      "I'm stuffed! No more snacks for me.",
      "Wow, that hit the spot! I'm full now.",
      "Thanks for the meal! I'm completely satisfied.",
      "I'm so full, I might just take a nap now.",
      "That was a feast! I'm good for now.",
      "I'm pleasantly full. No more food needed."
    ]
  },
  {
    status: "tired",
    phrases: [
      "Im exhausted... need to recharge my batteries.",
      "I could nap for a century right now.",
      "Dreaming of a world made of pillows.",
      "My energy bar is critically low."
    ]
  },
  {
    status: "depressed",
    phrases: [
      "hmm?",
      "I dont like living in this world.",
      "Im feeling a bit down today.",
      "I'm not in the mood right now.",
      "shush... just let me be.",
      "Give me alone"
    ]
  },
  {
    status: "great",
    phrases: [
      "Lets have fun together!",
      "Rahhhhhh!!!",
      "Smile detected. Happiness mode: activated.",
      "Do you feel that? Good vibes all around.",
      "Life seems full of possibilities from here."
    ]
  }
]

export const BUTTON_PHRASES = [
  {
    activity: "eat",
    phrases: [
      {
        liked: [
          "Purrfect!",
          "My favorite.",
          "Thanks!",
          "Yummy!",
          "Love it!"
        ]
      },
      {
        hated: [
          "No",
          "I dislike this one.",
          "Im good",
          "I dont like this",
          "No thanks, I'll pass on this."
        ]
      }
    ]
  },
  {
    activity: "sleep",
    phrases: [ "Zzz", "ZZzz", "*soft snores*"
    ]
  },
  {
    activity: "play",
    phrases: [
      {
        liked: [
          "that was so much fun!",
          "ive been waiting for this!",
          "Yay! Let's do it again!",
          "That was awesome!",
        ]
      },
      {
        hated: [
          "im done",
          "this isnt fun",
          "ill pass on that game.",
          "nah, not feeling it."
        ]
      }
    ]
  }
]

export function isActivity(item: string): item is Activity {
  return ['playing', 'sleeping', 'running', 'talk'].includes(item);
}

export function isFood(item: string): item is FoodType {
  return ['Cake', 'Carrot', 'Noob', 'Zombie', 'cookie'].includes(item);
}