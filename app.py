import streamlit as st
import pymysql
from datetime import datetime

# Database connection
def get_connection():
    return pymysql.connect(
        host='localhost',
        user='id20946986_gireesh',
        password='Gireesh@9',
        database='id20946986_test_db'
    )

# Function to insert GPS data
def insert_gps_data(lat, lng):
    conn = get_connection()
    try:
        with conn.cursor() as cursor:
            sql = "INSERT INTO user(lat, lng, created_date) VALUES (%s, %s, %s)"
            cursor.execute(sql, (lat, lng, datetime.now()))
            conn.commit()
            st.success(f'Data inserted successfully with ID: {cursor.lastrowid}')
    except Exception as e:
        st.error(f'Error: {e}')
    finally:
        conn.close()

# Streamlit UI
st.title("Bus Tracking System")
lat = st.text_input("Enter Latitude")
lng = st.text_input("Enter Longitude")

if st.button("Submit"):
    if lat and lng:
        insert_gps_data(lat, lng)
    else:
        st.warning("Please provide both latitude and longitude.")
