from django.db import models
from django.contrib.auth.models import User


# Create your models here.
class Goal(models.Model):
    user = models.ForeignKey(User, on_delete=models.CASCADE, related_name='goals')
    title = models.CharField(max_length=200)
    description = models.TextField(blank=True)
    target_date = models.DateField(null=True, blank=True)
    is_completed = models.BooleanField(default=False)
    created_at = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return self.title
    
class GoalProgress(models.Model):
    goal = models.ForeignKey(Goal, on_delete=models.CASCADE, related_name='progress_entries')
    progress_date = models.DateField()
    progress_description = models.TextField(blank=True)
    progress_percentage = models.IntegerField()

    def __str__(self):
        return f"Progress for {self.goal.title} on {self.progress_date}"
    
class GoalReminder(models.Model):
    goal = models.ForeignKey(Goal, on_delete=models.CASCADE, related_name='reminders')
    reminder_date = models.DateTimeField()
    message = models.CharField(max_length=255, blank=True)

    def __str__(self):
        return f"Reminder for {self.goal.title} on {self.reminder_date}"
