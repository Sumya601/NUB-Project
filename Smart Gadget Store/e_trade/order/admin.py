from django.contrib import admin
from .models import Order , OrderItem , ReturnOrder
import csv
import datetime
from django.http import HttpResponse


@admin.register(ReturnOrder)
class ReturnOrderAdmin(admin.ModelAdmin):
    list_display = ['user','order_item','reason','created']
    search_fields = ['user','order_item']
    list_per_page = 50
    list_filter = ['created']
    ordering = ['-created']


def export_to_csv(modeladmin, request, queryset):
    opts = modeladmin.model._meta
    content_disposition = 'attachment; filename={{opts.verbose_name}}.csv'
    response = HttpResponse(content_type='text/csv')
    response['Content-Disposition'] = content_disposition
    writer = csv.writer(response)

    fields = [field for field in opts.get_fields() if not field.many_to_many and not field.one_to_many]
    # Write a first row with header information
    writer.writerow([field.verbose_name for field in fields])
    # Write data rows
    for obj in queryset:
        data_row = []
        for field in fields:
            value = getattr(obj, field.name)
            if isinstance(value, datetime.datetime):
                value = value.strftime('%d/%m/%Y')
            data_row.append(value)
        writer.writerow(data_row)
    return response
export_to_csv.short_description = 'Export to CSV'
 

class OrderItemInline(admin.TabularInline):
    model = OrderItem
    raw_id_fields = ['product']
    extra = 0

@admin.register(Order)
class OrderAdmin(admin.ModelAdmin):
    date_hierarchy = 'created'
    list_display = ['id','customer','contact_number', 'payment_completed','total', 'order_items_list']
    search_fields = ['customer','id']
    list_per_page = 100
    list_filter = ['created','updated']
    actions = [export_to_csv]
    inlines = [OrderItemInline]
    
    
    def order_items_list(self, obj):
        return ", ".join([f"{item.product} ({item.quantity})" for item in obj.order_items.all()])
    

    def customer(self, obj):
	    return obj.user.get_full_name()

    def phone(self, obj):
	    return obj.user.phone
	    
	    
# class OrderAdmin(admin.ModelAdmin):
#     list_display = ('id', 'customer', 'address', 'contact_number', 'total',  'created', 'payment_completed', 'order_items_list')

#     def order_items_list(self, obj):
#         return ", ".join([f"{item.product} ({item.quantity})" for item in obj.order_items.all()])
    
#     order_items_list.short_description = 'Order Items'
    
#     def customer(self, obj):
# 	    return obj.user.get_full_name()

#     def phone(self, obj):
# 	    return obj.user.phone

# admin.site.register(Order, OrderAdmin)
    
