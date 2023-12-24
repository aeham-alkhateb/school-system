using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Project
{
    #region Attendance
    public class Attendance
    {
        #region Member Variables
        protected int _id;
        protected string _first_name;
        protected string _last_name;
        protected bool _sun;
        protected bool _mon;
        protected bool _tue;
        protected bool _wen;
        protected bool _thu;
        protected string _review;
        #endregion
        #region Constructors
        public Attendance() { }
        public Attendance(string first_name, string last_name, bool sun, bool mon, bool tue, bool wen, bool thu, string review)
        {
            this._first_name=first_name;
            this._last_name=last_name;
            this._sun=sun;
            this._mon=mon;
            this._tue=tue;
            this._wen=wen;
            this._thu=thu;
            this._review=review;
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
        public virtual bool Sun
        {
            get {return _sun;}
            set {_sun=value;}
        }
        public virtual bool Mon
        {
            get {return _mon;}
            set {_mon=value;}
        }
        public virtual bool Tue
        {
            get {return _tue;}
            set {_tue=value;}
        }
        public virtual bool Wen
        {
            get {return _wen;}
            set {_wen=value;}
        }
        public virtual bool Thu
        {
            get {return _thu;}
            set {_thu=value;}
        }
        public virtual string Review
        {
            get {return _review;}
            set {_review=value;}
        }
        #endregion
    }
    #endregion
}