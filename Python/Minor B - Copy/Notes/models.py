from django.db import models

# Create your models here.
class Note(models.Model):
    title = models.CharField(max_length=200)
    content = models.TextField()
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    def __str__(self):
        return self.title
    
class NoteTag(models.Model):
    note = models.ForeignKey(Note, on_delete=models.CASCADE, related_name='note_tags')
    tag = models.CharField(max_length=100)

    def __str__(self):
        return f"{self.tag} for {self.note.title}"