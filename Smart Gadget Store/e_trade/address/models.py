from django.db import models
from account.models import User
from django.db.models.signals import pre_save,post_save
from django.dispatch import receiver


DISTRICTS = (
    ('Dhaka', 'Dhaka'),
    ('Bagerhat', 'Bagerhat'),
    ('Bandarban', 'Bandarban'),
    ('Barguna', 'Barguna'),
    ('Barisal', 'Barisal'),
    ('Bhola', 'Bhola'),
    ('Bogra', 'Bogra'),
    ('Brahmanbaria', 'Brahmanbaria'),
    ('Chandpur', 'Chandpur'),
    ('Chapainawabganj', 'Chapainawabganj'),
    ('Chattogram', 'Chattogram'),
    ('Chuadanga', 'Chuadanga'),
    ('Comilla', 'Comilla'),
    ('Cox’s Bazar', "Cox's Bazar"),
    ('Dinajpur', 'Dinajpur'),
    ('Faridpur', 'Faridpur'),
    ('Feni', 'Feni'),
    ('Gaibandha', 'Gaibandha'),
    ('Gazipur', 'Gazipur'),
    ('Gopalganj', 'Gopalganj'),
    ('Habiganj', 'Habiganj'),
    ('Jamalpur', 'Jamalpur'),
    ('Jashore', 'Jashore'),
    ('Jhalokathi', 'Jhalokathi'),
    ('Jhenaidah', 'Jhenaidah'),
    ('Joypurhat', 'Joypurhat'),
    ('Khagrachari', 'Khagrachari'),
    ('Khulna', 'Khulna'),
    ('Kishoreganj', 'Kishoreganj'),
    ('Kurigram', 'Kurigram'),
    ('Kushtia', 'Kushtia'),
    ('Lakshmipur', 'Lakshmipur'),
    ('Lalmonirhat', 'Lalmonirhat'),
    ('Madaripur', 'Madaripur'),
    ('Magura', 'Magura'),
    ('Manikganj', 'Manikganj'),
    ('Meherpur', 'Meherpur'),
    ('Moulvibazar', 'Moulvibazar'),
    ('Munshiganj', 'Munshiganj'),
    ('Mymensingh', 'Mymensingh'),
    ('Naogaon', 'Naogaon'),
    ('Narail', 'Narail'),
    ('Narayanganj', 'Narayanganj'),
    ('Narsingdi', 'Narsingdi'),
    ('Natore', 'Natore'),
    ('Netrokona', 'Netrokona'),
    ('Nilphamari', 'Nilphamari'),
    ('Noakhali', 'Noakhali'),
    ('Pabna', 'Pabna'),
    ('Panchagarh', 'Panchagarh'),
    ('Patuakhali', 'Patuakhali'),
    ('Pirojpur', 'Pirojpur'),
    ('Rajbari', 'Rajbari'),
    ('Rajshahi', 'Rajshahi'),
    ('Rangamati', 'Rangamati'),
    ('Rangpur', 'Rangpur'),
    ('Satkhira', 'Satkhira'),
    ('Shariatpur', 'Shariatpur'),
    ('Sherpur', 'Sherpur'),
    ('Sirajganj', 'Sirajganj'),
    ('Sunamganj', 'Sunamganj'),
    ('Sylhet', 'Sylhet'),
    ('Tangail', 'Tangail'),
    ('Thakurgaon', 'Thakurgaon'),
)

PROVINCE = (
    ('Dhaka','Dhaka'),
    ('Chittagong','Chittagong'),
    ('Rajshahi','Rajshahi'),
    ('Khulna','Khulna'),
    ('Barisal','Barisal'),
    ('Sylhet','Sylhet'),
    ('Rangpur','Rangpur'),
    ('Mymensingh','Mymensingh'),
)
  
class Address(models.Model):
    user = models.ForeignKey(User, on_delete=models.CASCADE)
    building = models.CharField(max_length=120)
    area = models.CharField(verbose_name="Area",max_length=100)
    city = models.CharField(verbose_name="City/Town",max_length=50)
    district = models.CharField(choices=DISTRICTS,verbose_name="District",max_length=100, default="Dhaka")
    province = models.CharField(choices=PROVINCE,verbose_name="Division",max_length=100, default="Dhaka")
    default = models.BooleanField(default=True)
    created = models.DateTimeField(auto_now_add=True)

    class Meta: 
        verbose_name = ("Address")
        verbose_name_plural = ("Address")
        ordering = ('-created',)
        
    def __str__(self):
        return str(self.user)

    def __str__(self):
        return 'Address of {} with id {}'.format(self.user, self.id)

    def current_address(self):
        return Address.objects.get(user=self.request.user, default=True)
