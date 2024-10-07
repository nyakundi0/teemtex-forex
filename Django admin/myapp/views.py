from django.shortcuts import render
from django.contrib.auth.decorators import user_passes_test

def is_staff(user):
    return user.is_staff

@user_passes_test(is_staff)
def staff_dashboard(request):
    return render(request, 'staff_dashboard.html')