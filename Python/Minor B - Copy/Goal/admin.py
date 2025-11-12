from django.contrib import admin
from .models import Goal, GoalProgress, GoalReminder
# Register your models here.
admin.site.register(Goal)
admin.site.register(GoalProgress)
admin.site.register(GoalReminder)