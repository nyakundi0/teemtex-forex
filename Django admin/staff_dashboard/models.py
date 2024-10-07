from django.db import models
from django.contrib.auth.models import User

class UserProfile(models.Model):
    user = models.OneToOneField(User, on_delete=models.CASCADE)
    balance = models.DecimalField(max_digits=10, decimal_places=2, default=0.00)
    referrals = models.IntegerField(default=0)

class Trade(models.Model):
    user = models.ForeignKey(User, on_delete=models.CASCADE)
    trade_amount = models.DecimalField(max_digits=10, decimal_places=2)
    trade_time = models.DateTimeField(auto_now_add=True)
    active = models.BooleanField(default=True)

class Deposit(models.Model):
    user = models.ForeignKey(User, on_delete=models.CASCADE)
    amount = models.DecimalField(max_digits=10, decimal_places=2)
    date = models.DateTimeField(auto_now_add=True)

class Withdrawal(models.Model):
    user = models.ForeignKey(User, on_delete=models.CASCADE)
    amount = models.DecimalField(max_digits=10, decimal_places=2)
    date = models.DateTimeField(auto_now_add=True)

class TradingHistory(models.Model):
    user = models.ForeignKey(User, on_delete=models.CASCADE)
    trade = models.ForeignKey(Trade, on_delete=models.CASCADE)
    outcome = models.CharField(max_length=50)
    timestamp = models.DateTimeField(auto_now_add=True)
