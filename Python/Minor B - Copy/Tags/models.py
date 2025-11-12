from django.db import models

# Create your models here.
class Tag(models.Model):
    name = models.CharField(max_length=100, unique=True)
    Id = models.AutoField(primary_key=True)
    created_at = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return self.name
    
class TagCategory(models.Model):
    tag = models.ForeignKey(Tag, on_delete=models.CASCADE, related_name='categories')
    category_name = models.CharField(max_length=100)

    def __str__(self):
        return f"{self.category_name} for {self.tag.name}"
    
