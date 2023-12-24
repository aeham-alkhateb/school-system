using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Project
{
    #region Massages
    public class Massages
    {
        #region Member Variables
        protected string _first_name;
        protected string _last_name;
        protected string _massage;
        #endregion
        #region Constructors
        public Massages() { }
        public Massages(string first_name, string last_name, string massage)
        {
            this._first_name=first_name;
            this._last_name=last_name;
            this._massage=massage;
        }
        #endregion
        #region Public Properties
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
        public virtual string Massage
        {
            get {return _massage;}
            set {_massage=value;}
        }
        #endregion
    }
    #endregion
}