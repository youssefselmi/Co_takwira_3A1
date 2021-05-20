/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.menu.coheal.ui;

import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
//import com.menu.coheal.services.user.ServiceUser;
//import com.menu.coheal.utils.UserSession;

/**
 * GUI builder created Form
 *
 * @author wajdi's pc
 */
public class LoginForm extends com.codename1.ui.Form {

    public LoginForm() {
        this(com.codename1.ui.util.Resources.getGlobalResources());
    }
    
    public LoginForm(com.codename1.ui.util.Resources resourceObjectInstance) {
        initGuiBuilderComponents(resourceObjectInstance);
    }

//////////////////////////////-- DON'T EDIT BELOW THIS LINE!!!
    protected com.codename1.ui.Container gui_Box_Layout_Y = new com.codename1.ui.Container(new com.codename1.ui.layouts.BoxLayout(com.codename1.ui.layouts.BoxLayout.Y_AXIS));
    protected com.codename1.ui.TextField gui_Email = new com.codename1.ui.TextField();
    protected com.codename1.ui.TextField gui_Password = new com.codename1.ui.TextField();
    protected com.codename1.ui.Button gui_Btn_Login = new com.codename1.ui.Button();
    protected com.codename1.ui.Button gui_BTN_register = new com.codename1.ui.Button();


// <editor-fold defaultstate="collapsed" desc="Generated Code">                          
    private void guiBuilderBindComponentListeners() {
        EventCallbackClass callback = new EventCallbackClass();
        gui_Btn_Login.addActionListener(callback);
        gui_BTN_register.addActionListener(callback);
    }

    class EventCallbackClass implements com.codename1.ui.events.ActionListener, com.codename1.ui.events.DataChangedListener {
        private com.codename1.ui.Component cmp;
        public EventCallbackClass(com.codename1.ui.Component cmp) {
            this.cmp = cmp;
        }

        public EventCallbackClass() {
        }

        public void actionPerformed(com.codename1.ui.events.ActionEvent ev) {
            com.codename1.ui.Component sourceComponent = ev.getComponent();

            if(sourceComponent.getParent().getLeadParent() != null && (sourceComponent.getParent().getLeadParent() instanceof com.codename1.components.MultiButton || sourceComponent.getParent().getLeadParent() instanceof com.codename1.components.SpanButton)) {
                sourceComponent = sourceComponent.getParent().getLeadParent();
            }

            if(sourceComponent == gui_Btn_Login) {
                onBtn_LoginActionEvent(ev);
            }
            if(sourceComponent == gui_BTN_register) {
                onBTN_registerActionEvent(ev);
            }
        }

        public void dataChanged(int type, int index) {
        }
    }
    private void initGuiBuilderComponents(com.codename1.ui.util.Resources resourceObjectInstance) {
        guiBuilderBindComponentListeners();
        setLayout(new com.codename1.ui.layouts.LayeredLayout());
        setInlineStylesTheme(resourceObjectInstance);
        setScrollableY(true);
                setInlineStylesTheme(resourceObjectInstance);
        setTitle("LoginForm");
        setName("LoginForm");
        gui_Box_Layout_Y.setPreferredSizeStr("inherit 48.67725mm");
                gui_Box_Layout_Y.setInlineStylesTheme(resourceObjectInstance);
        gui_Box_Layout_Y.setName("Box_Layout_Y");
        addComponent(gui_Box_Layout_Y);
        gui_Email.setHint("Email");
                gui_Email.setInlineStylesTheme(resourceObjectInstance);
        gui_Email.setName("Email");
        gui_Email.setConstraint(com.codename1.ui.TextArea.EMAILADDR);
        gui_Password.setHint("Password");
                gui_Password.setInlineStylesTheme(resourceObjectInstance);
        gui_Password.setName("Password");
        gui_Password.setConstraint(com.codename1.ui.TextArea.PASSWORD);
        gui_Btn_Login.setText("Login");
                gui_Btn_Login.setInlineStylesTheme(resourceObjectInstance);
        gui_Btn_Login.setName("Btn_Login");
        gui_BTN_register.setText("Register");
                gui_BTN_register.setInlineStylesTheme(resourceObjectInstance);
        gui_BTN_register.setName("BTN_register");
        gui_Box_Layout_Y.addComponent(gui_Email);
        gui_Box_Layout_Y.addComponent(gui_Password);
        gui_Box_Layout_Y.addComponent(gui_Btn_Login);
        gui_Box_Layout_Y.addComponent(gui_BTN_register);
        ((com.codename1.ui.layouts.LayeredLayout)gui_Box_Layout_Y.getParent().getLayout()).setInsets(gui_Box_Layout_Y, "38.735493% 15.442639% 26.554518% 15.503651%").setReferenceComponents(gui_Box_Layout_Y, "-1 -1 -1 -1").setReferencePositions(gui_Box_Layout_Y, "0.0 0.0 0.0 0.0");
    }// </editor-fold>

//-- DON'T EDIT ABOVE THIS LINE!!!
    public void onBtn_LoginActionEvent(com.codename1.ui.events.ActionEvent ev) {
        Resources theme = UIManager.initFirstTheme("/themeCoHeal");
       // ServiceUser su=new ServiceUser();

//        if(su.login(gui_Email.getText(), gui_Password.getText()).isEmpty())
//            System.out.println("no");
//        else {
//            
//            new HomeForm(theme).show();
//        }
    }

    public void onBTN_registerActionEvent(com.codename1.ui.events.ActionEvent ev) {
        Resources theme = UIManager.initFirstTheme("/themeCoHeal");
        new RegisterForm(theme).show();
    }

}
