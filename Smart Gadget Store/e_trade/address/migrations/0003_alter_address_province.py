# Generated by Django 3.2.5 on 2023-11-26 05:49

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('address', '0002_auto_20231119_1123'),
    ]

    operations = [
        migrations.AlterField(
            model_name='address',
            name='province',
            field=models.CharField(choices=[('Dhaka', 'Dhaka'), ('Chittagong', 'Chittagong'), ('Rajshahi', 'Rajshahi'), ('Khulna', 'Khulna'), ('Barisal', 'Barisal'), ('Sylhet', 'Sylhet'), ('Rangpur', 'Rangpur'), ('Mymensingh', 'Mymensingh')], default='Bangladesh', max_length=100, verbose_name='Country'),
        ),
    ]
