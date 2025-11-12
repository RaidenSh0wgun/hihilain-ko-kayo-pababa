import * as React from "react"
import * as ProgressPrimitive from "@radix-ui/react-progress"
import { cn } from "@/lib/utils"

const Progress = React.forwardRef<
  React.ElementRef<typeof ProgressPrimitive.Root>,
  React.ComponentPropsWithoutRef<typeof ProgressPrimitive.Root> & {
    value?: number
  }
>(({ className, value = 0, ...props }, ref) => {
  const clamped = Math.max(0, Math.min(100, value))

  return (
    <ProgressPrimitive.Root
      ref={ref}
      className={cn(
        "relative h-5 w-full overflow-hidden rounded-none bg-secondary border-4 border-gray-200 border-t-gray-400 border-l-gray-500",
        className
      )}
      {...props}
    >
      <ProgressPrimitive.Indicator
        className="h-full w-full flex-1 bg-green-600 transition-transform"
        style={{ transform: `translateX(-${100 - clamped}%)` }}
      />
    </ProgressPrimitive.Root>
  )
})
Progress.displayName = "Progress"

export { Progress }


