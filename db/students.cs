using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Project
{
    #region Students
    public class Students
    {
        #region Member Variables
        protected int _id;
        protected string _first_name;
        protected string _last_name;
        protected int _phone;
        protected string _email;
        protected string _password;
        #endregion
        #region Constructors
        public Students() { }
        public Students(string first_name, string last_name, int phone, string email, string password)
        {
            this._first_name=first_name;
            this._last_name=last_name;
            this._phone=phone;
            this._email=email;
            this._password=password;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string First_name
        {
            get {return _first_name;}
            set {_first_name=value;}
        }
        public virtual string Last_name
        {
            get {return _last_name;}
            set {_last_name=value;}
        }
        public virtual int Phone
        {
            get {return _phone;}
            set {_phone=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string Password
        {
            get {return _password;}
            set {_password=value;}
        }
        #endregion
    }
    #endregion
}