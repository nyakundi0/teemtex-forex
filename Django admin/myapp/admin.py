from django.contrib import admin
from .models import Trade, Deposit, Withdrawal, UserAccount

@admin.register(Trade)
class TradeAdmin(admin.ModelAdmin):
    list_display = ['trade_id', 'user', 'amount', 'status', 'created_at']

@admin.register(Deposit)
class DepositAdmin(admin.ModelAdmin):
    list_display = ['deposit_id', 'user', 'amount', 'status', 'created_at']

@admin.register(Withdrawal)
class WithdrawalAdmin(admin.ModelAdmin):
    list_display = ['withdrawal_id', 'user', 'amount', 'status', 'created_at']

@admin.register(UserAccount)
class UserAccountAdmin(admin.ModelAdmin):
    list_display = ['user', 'balance', 'created_at']
