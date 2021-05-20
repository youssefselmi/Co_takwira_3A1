
package com.gestionMatch.gui;

import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.util.Resources;

public class BaseForm extends Form {

    public void installSidemenu(Resources res) {
        Image selection = res.getImage("selection-in-sidemenu.png");

        Image inboxImage = null;
        if (isCurrentInbox()) {
            inboxImage = selection;
        }

       
      Button inboxButton = new Button("Inbox", inboxImage);
        inboxButton.setUIID("SideCommand");
        inboxButton.getAllStyles().setPaddingBottom(0);
        Container inbox = FlowLayout.encloseMiddle(inboxButton,
                new Label("18", "SideCommandNumber"));
        inbox.setLeadComponent(inboxButton);
        inbox.setUIID("SideCommand");
        inboxButton.addActionListener(e -> new ListeMatchForm(res).show());
        getToolbar().addComponentToSideMenu(inbox);

      //  getToolbar().addCommandToSideMenu("Match", /*statsImage*/null, e -> new StatsForm(res).show());
      // getToolbar().addCommandToSideMenu("Calendar",/* calendarImage*/null, e -> new CalendarForm(res).show());
        //getToolbar().addCommandToSideMenu("Stade", null, e ->  new StatsForm(res).show());
       // getToolbar().addCommandToSideMenu("Vote",/* trendingImage*/ null, e -> new TrendingForm(res).show());
       
    }

    protected boolean isCurrentInbox() {
        return false;
    }

    protected boolean isCurrentMatch() {
        return false;
    }

    protected boolean isCurrentCalendar() {
        return false;
    }

    protected boolean isCurrentStade() {
        return false;
    }

    protected boolean isCurrentVote() {
        return false;
    }
}
