from django.contrib import admin
from .models import WorkoutTag, Workouts, WorkoutSchedule
# Register your models here.
admin.site.register(WorkoutTag)
admin.site.register(Workouts)
admin.site.register(WorkoutSchedule)