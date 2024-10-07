from django.contrib import admin
from .models import UserProfile, Trade, Deposit, Withdrawal, TradingHistory

admin.site.register(UserProfile)
admin.site.register(Trade)
admin.site.register(Deposit)
admin.site.register(Withdrawal)
admin.site.register(TradingHistory)
